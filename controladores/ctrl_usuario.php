<?php
require "clases/clase_base.php";
require "clases/usuario.php";
require "clases/Utils.php";
require_once('clases/template.php');
require_once('clases/auth.php');

class ControladorUsuario extends ControladorIndex {
	function nuevo(){
		$mensaje = '';
		if(isset($_POST["nickname"])){
			$nick=($_POST["nickname"]);
	 		$contra=($_POST["pass"]);
	 		$email=($_POST["email"]);
	 		$avatar="../obligatorio_php/public/media/default_avatar.jpg";
	 		$usuario=new Usuario();
			$respuesta=$usuario->setUsuario($nick,$contra,$email,$avatar);
			if ($respuesta==true){
				$send=new Utils();
				$send->enviarEmail($email,$nick,$contra);
				$this->redirect("index","home");
				exit;
			}else {
				$mensaje="Error al crear nuevo usuario.";
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
			$pass=$_POST["password"];
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

	function perfil($params=array()){
		Auth::estaLogueado();
		Session::init();
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

	function avatar_change(){
		Auth::estaLogueado();
		Session::init();
		$tpl = Template::getInstance();
		$tpl->asignar('proyecto',"Jukebox");
		$tpl->mostrar('vp-cambiar_foto');
	}

	function edit_profile(){
		Auth::estaLogueado();
		Session::init();
		$userid=Session::get('usuario_id');
		$msgerror='';
		$msgok='';
		$msgerror_two='';
		$msgok_two='';
		$confirm_nom=false;
		$confirm_ape=false;
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

		if ($confirm_ape!=false || $confirm_nom!=false){
			header("Refresh:3");
		}

		$tpl = Template::getInstance();
		$tpl->asignar('proyecto',"Jukebox");
		$tpl->asignar('msgerror',$msgerror);
		$tpl->asignar('msgok',$msgok);
		$tpl->asignar('msgerror_two',$msgerror_two);
		$tpl->asignar('msgok_two',$msgok_two);
		$tpl->mostrar('vp-editar_perfil');
	}
}
?>