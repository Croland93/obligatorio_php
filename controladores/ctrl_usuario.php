<?php
require "clases/clase_base.php";
require "clases/usuario.php";
require "clases/Utils.php";
require_once('clases/template.php');
require_once('clases/auth.php');
require_once('clases/recaptchalib.php');

class ControladorUsuario extends ControladorIndex {
	function nuevo(){
		$mensaje = '';
		$captcha_publickey = "6Le7sCITAAAAADSD-3kFrVwaAiG9MpyjxCe9saJP";
	    $captcha_privatekey = "6Le7sCITAAAAAK2BCXC7kZPb_0Z97DfXlC06Jijh";
	    $captcha_response=null;
	    $reCaptcha=new \ReCaptcha\ReCaptcha($captcha_privatekey);
		if(isset($_POST["nickname"])){
			if($_POST["g-recaptcha-response"]){
		        $captcha_response=$reCaptcha->verify($_POST["g-recaptcha-response"],$_SERVER["REMOTE_ADDR"]);
			    if ($captcha_response->isSuccess()) {
			        //todo correcto
		            $nick=($_POST["nickname"]);
					$contraSC=($_POST["pass"]);
			 		$contra=sha1($_POST["pass"]);
			 		$email=($_POST["email"]);
			 		$avatar="public/media/default_avatar.jpg";
			 		$usuario=new Usuario();
					$respuesta=$usuario->setUsuario($nick,$contra,$email,$avatar);
					if ($respuesta==true){
						$send=new Utils();
						$send->enviarEmail($email,$nick,$contraSC);
						$this->redirect("index","home");
						exit;
					}else {
						$mensaje="Error al crear cuenta";
					}
		        }else{
		           	//El código de validación de la imagen está mal escrito.
			      	$mensaje="El captcha no es correcto";
			       	$error_captcha = $captcha_response->getErrorCodes();
		        }
			}
	 	}

		$tpl = Template::getInstance();
		$tpl->asignar('proyecto',"Jukebox");
		$tpl->asignar('titulo',"Nuevo Usuario");
		$tpl->asignar('mensaje',$mensaje);
		$tpl->mostrar('usuarios_nuevo');
	}

	function check(){
		if (isset($_POST['nickname'])){
			$nickname = $_POST['nickname'];
			$long = strlen($nickname);
			if (!empty($nickname) && $long>3){
				$check_nickname=new Usuario();
				$respuesta_nick=$check_nickname->availability($nickname);

				if ($respuesta_nick==1){
					echo '<span class="text-success">Nickname disponible</span>';
				} else {
					echo '<span class="text-danger">Nickname no disponible</span>';
				}
			}
		}

		if (isset($_POST['email'])){
			$email = $_POST['email'];
			if (filter_var($email,FILTER_VALIDATE_EMAIL)){
				$check_email=new Usuario();
				$respuesta_email=$check_email->availability_email($email);

				if ($respuesta_email==1){
					echo '<span class="text-success">Este email esta disponible</span>';
				} else {
					echo '<span class="text-danger">Ya existe una cuenta con este email</span>';
				}
			}
		}
	}

	function getLogin(){
		$mensaje="";
		session_start();
		if(isset($_POST["email"])){
			$usr= new Usuario();
			$email=$_POST["email"];
			$pass=sha1($_POST["password"]);
			$res=$usr->login($email,$pass);
			if(!$res){
				$mensaje="El usuario o la contraseña son incorrectos.";
			}else{
				Session::init();
				Session::set('usuario_logueado', true);
		        Session::set('usuario_id', $res->id);
		        Session::set('usuario_nick', $res->nickname);
		        Session::set('usuario_email', $res->email);
		        Session::set('usuario_imagen', $res->img);
		        Session::set('usuario_nombre', $res->nombre);
		        Session::set('usuario_apellido', $res->apellido);
				$this->redirect("index","home");
			}
		}
		$tpl = Template::getInstance();
		$tpl->asignar('proyecto','Jukebox');
		$tpl->asignar('titulo',"Iniciar Session");
		$tpl->asignar('mensaje',$mensaje);
		$tpl->mostrar('usuarios_login',array());
	}

	function logout(){
		Session::init();
		Session::destroy();
		$this->redirect("index","home");
	}

	function profile($params){
		$userid=Session::get('usuario_id');
		if($userid!=''){
			if(!empty($params)){
				$usr=new Usuario();
				$nick=$params[0];
				$data=$usr->datos_usuario_bynick($nick);
				$res=$usr->suscrito($userid,$nick);
				if ($res==0){
					$disp="disabled";
					$disp_two="Suscrito";
				} else {
					$disp="enabled";
					$disp_two="Suscribirse";
					if ($params[1]=="subscribe"){
						$sub=$usr->suscribirse($userid,$nick);
						if($sub==true){
							$newparams = array($nick);
							$this->redirect("usuario","profile",$newparams);
							exit;
						}
					}
				}
			}
		} else {
			if(!empty($params)){
				$nick=$params[0];
				$usr=new Usuario();
				$data=$usr->datos_usuario_bynick($nick);
				$disp="disabled";
				$disp_two="Inicia sesión para seguir a este usuario";
			}
		}
		$tpl = Template::getInstance();
		$tpl->asignar('proyecto','Jukebox');
		$tpl->asignar('stalked_user_data',$data);
		$tpl->asignar('disponible',$disp);
		$tpl->asignar('disponible_two',$disp_two);
		$tpl->mostrar('stalked_user');
	}

	function my_profile($params=array()){
		Auth::estaLogueado();
		$id = Session::get('usuario_id');
		$usr=new Usuario();
		$ser=$usr->datos_usuario($id);
		$msgerror='';
		$msgerror_two='';
		$msgok='';
		$msgok_two='';
		if(!empty($params)){
			if($params[0]=="borrar"){
				$usuario=new Usuario();
				$idDelete=$params[1];
				Session::init();
				Session::destroy();
				if($usuario->borrar($idDelete)){
					$this->redirect("index","home");
					exit;
				}
			}
		}

		$tpl = Template::getInstance();
		$tpl->asignar('proyecto',"Jukebox");
		$tpl->asignar('msgerror',$msgerror);
		$tpl->asignar('msgok',$msgok);
		$tpl->asignar('msgerror_two',$msgerror_two);
		$tpl->asignar('msgok_two',$msgok_two);
		$tpl->asignar('nick',$ser);
		$tpl->mostrar('ver_perfil');
	}

	function followers(){
		Auth::estaLogueado();
		$id = Session::get('usuario_id');
		$usr=new Usuario();
		$ser=$usr->datos_usuario($id);

		$tpl = Template::getInstance();
		$tpl->asignar('proyecto',"Jukebox");
		$tpl->asignar('nick',$ser);
		$tpl->mostrar('vp-seguidores');
	}

	function avatar_change(){
		Auth::estaLogueado();
		$msgerror='';
		$msgok='';
		$userid=Session::get('usuario_id');
		$usrvista=new Usuario();
		$ser=$usrvista->datos_usuario($userid);
		if(isset($_FILES['uploadedfile'])){
			if ($_FILES["uploadedfile"]["error"] > 0){
			    echo "ha ocurrido un error";
			} else {
			    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
			    //y que el tamano del archivo no exceda los 100kb
			    $permitidos = array("image/jpg", "image/jpeg", "image/png");
			    $limite_kb = 1000;

			    if (in_array($_FILES['uploadedfile']['type'], $permitidos)){
			    	if ($_FILES['uploadedfile']['size'] <= $limite_kb * 1024){
			    		//esta es la ruta donde copiaremos la uploadedfile
				        //recuerden que deben crear un directorio con este mismo nombre
				        //en el mismo lugar donde se encuentra el archivo subir.php
				        $ruta = "public/user_uploads/" . $_FILES['uploadedfile']['name'];
				        //comprovamos si este archivo existe para no volverlo a copiar.
				        //pero si quieren pueden obviar esto si no es necesario.
				        //o pueden darle otro nombre para que no sobreescriba el actual.
				        if (!file_exists($ruta)){
				            //aqui movemos el archivo desde la ruta temporal a nuestra ruta
				            //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
				            //almacenara true o false
				            $resultado = @move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], $ruta);
				            if ($resultado){
				            	$usr = new Usuario();
				            	$resNewAvatar=$usr->uploadAvatar($userid,$ruta);
				            	if ($resNewAvatar){
				            		$msgok="Imagen subida con éxito";
				            	} else {
				            		$msgerror="Error al subir imagen";
				            	}
				            } else {
				                $msgerror="Error al subir imagen";
				            }
				        } else {
				        	$usr = new Usuario();
				            $resNewAvatar=$usr->uploadAvatar($userid,$ruta);
				            if ($resNewAvatar){
				            	$msgok="Imagen subida con éxito";
				            } else {
				            	$msgerror="Error al subir imagen";
				            }
				        }
			    	} else {
			    		$msgerror="El tamaño de la imagen tiene que ser menor a $limite_kb Kb";
			    	}
			    } else {
			        $msgerror="El formato del archivo es incorrecto";
			    }
			}
		}
		$tpl = Template::getInstance();
		$tpl->asignar('proyecto',"Jukebox");
		$tpl->asignar('msgerror',$msgerror);
		$tpl->asignar('msgok',$msgok);
		$tpl->asignar('nickvista',$ser);
		$tpl->mostrar('vp-cambiar_foto');
	}

	function edit_profile(){
		Auth::estaLogueado();
		$userid=Session::get('usuario_id');
		$email=Session::get('usuario_email');
		$nick=Session::get('usuario_nick');
		$usrvista=new Usuario();
		$ser=$usrvista->datos_usuario($userid);
		$msgerror='';
		$msgok='';
		$msgerror_two='';
		$msgok_two='';
		$confirm_nom=false;
		$confirm_ape=false;
		$captcha_publickey = "6Le7sCITAAAAADSD-3kFrVwaAiG9MpyjxCe9saJP";
	    $captcha_privatekey = "6Le7sCITAAAAAK2BCXC7kZPb_0Z97DfXlC06Jijh";
	    $captcha_response=null;
	    $reCaptcha=new \ReCaptcha\ReCaptcha($captcha_privatekey);
		if(isset($_POST['oldemail'])){
			$oe=$_POST['oldemail'];
			if(filter_var($oe,FILTER_VALIDATE_EMAIL)){
				$old=new Usuario();
				$res=$old->check_emailandid($oe,$userid);
				if($res==0){
					$ne=$_POST['email'];
					$rne=$_POST['reemail'];
					if(filter_var($ne,FILTER_VALIDATE_EMAIL)){
						if(strcmp($ne,$rne)==0){
							$usr=new Usuario();
							$resUpEmail=$usr->updateEmail($ne,$oe);
							if($resUpEmail){
								Session::destroy();
								$this->redirect("index","home");
								exit;
							} else {
								$msgerror="Error interno al actualizar email.";
							}
						} else {
							$msgerror="Los emails que ingresaste no coinciden.";
						}
					} else {
						$msgerror="El nuevo correo no es válido.";
					}
				} else {
					$msgerror="El correo actual no es correcto o no pertenece a este usuario.";
				}
			} else {
				$msgerror="El correo actual no es válido.";
			}
		}

		if(isset($_POST['nombre'])){
			$newnom=$_POST['nombre'];
			$oldnom=Session::get('usuario_nombre');
			if($newnom!=''){
				if(preg_match("/^[a-zA-Z]*$/",$newnom)){
					$usr=new Usuario();
					$resUpNombre=$usr->updateNombre($newnom,$userid);
					if($resUpNombre){
						$msgok="Nombre actualizado con exito. La página se actualizará en unos segundos.";
						Session::set('usuario_nombre',$newnom);
						$confirm_nom=true;
					} else {
						$msgerror="Error interno al actualizar nombre.";
					}
				} else {
					$msgerror="El nombre que ingresaste tiene caracteres no válidos.";
				}
			}
		}

		if(isset($_POST['apellido'])){
			$newape=$_POST['apellido'];
			$oldape=Session::get('usuario_apellido');
			if($newape!=''){
				if(preg_match("/^[a-zA-Z]*$/",$newape)){
					$usr=new Usuario();
					$resUpApellido=$usr->updateApellido($newape,$userid);
					if($resUpApellido){
						$msgok_two="Apellido actualizado con exito. La página se actualizará en unos segundos.";
						Session::set('usuario_apellido',$newape);
						$confirm_ape=true;
					} else {
						$msgerror_two="Error interno al actualizar apellido.";
					}
				} else {
					$msgerror_two="El apellido que ingresaste tiene caracteres no válidos.";
				}
			}
		}

		if($_POST["g-recaptcha-response"]){
	        $captcha_response=$reCaptcha->verify($_POST["g-recaptcha-response"],$_SERVER["REMOTE_ADDR"]);
		    if ($captcha_response->isSuccess()) {
		        //todo correcto
	            $send=new Utils();
	          	$send->cambioContra($email,$nick);
	          	$msgok="La petición a sido enviada con éxito.";
	        }else{
	           	//El código de validación de la imagen está mal escrito.
		      	$msgerror="El captcha no es correcto.";
		       	$error_captcha = $captcha_response->getErrorCodes();
	        }
		}

		if ($confirm_ape!=false || $confirm_nom!=false){
			header("Refresh:3");
		}

		$tpl = Template::getInstance();
		$tpl->asignar('proyecto',"Jukebox");
		$tpl->asignar('msgerror',$msgerror);
		$tpl->asignar('msgok',$msgok);
		$tpl->asignar('msgerror_two',$msgerror_two);
		$tpl->asignar('msgok_two',$msgok_two);
		$tpl->asignar('nickvista',$ser);
		$tpl->mostrar('vp-editar_perfil');
	}

	function change_password(){
		Auth::estaLogueado();
		$msgok='';
		$msgerror='';
		$noform='';
		$userid=Session::get('usuario_id');
		if(isset($_POST['old-pass'])){
			$op=$_POST['old-pass'];
			$np=$_POST['new-pass'];
			$usr=new Usuario();
			if($usr->equalPass($userid,$op)){
				$resultado=$usr->updatePassword($np,$userid);
				if($resultado){
					$msgok="Contraseña cambiada con éxito.";
					$noform="noform";
					Session::destroy();
					header("Refresh:3; url=http://localhost:8888/obligatorio_php/home");
				} else {
					$msgerror="Error interno al cambiar contraseña.";
				}
			} else {
				$msgerror="La contraseña actual no es correcta.";
			}
		}

		$tpl = Template::getInstance();
		$tpl->asignar('proyecto',"Jukebox");
		$tpl->asignar('noform',$noform);
		$tpl->asignar('msgok',$msgok);
		$tpl->asignar('msgerror',$msgerror);
		$tpl->mostrar('cambiar_contra');
	}
}
?>