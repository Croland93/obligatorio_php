<?php
require "clases/clase_base.php";
require "clases/usuario.php";
require_once('clases/template.php');

class ControladorUsuario extends ControladorIndex {
	function nuevo(){
		$mensaje = '';
		if(isset($_POST["nickname"])){
			$nick=($_POST["nickname"]);
	 		$contra=($_POST["pass"]);
	 		$email=($_POST["email"]);
	 		$avatar="../public/media/default_avatar.jpg";
	 		$usuario=new Usuario();
			$respuesta=$usuario->setUsuario($nick,$contra,$email,$avatar);
			if ($respuesta==true){
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

<<<<<<< HEAD
	$tpl = Template::getInstance();
	$tpl->asignar('proyecto',"Jukebox");
	$tpl->asignar('titulo',"Nuevo Usuario");
	$tpl->asignar('mensaje',$mensaje);
	$tpl->mostrar('usuarios_nuevo');
}
<<<<<<< HEAD
=======
function getLogin(){
	$mensaje="";
	if(isset($_POST["email"])){
		$usr= new Usuario();
		
		$email=$_POST["email"];
		$pass=($_POST["password"]);

		if($usr->autentificar($email,$pass)){
			$mensaje="usuario logeuado";
			$this->redirect("index","home");
			exit;

			
		}else{
			
			$mensaje="Error! No se pudo comprobar datos";
		}

		//echo Session::get('usuario_nombre');

		
	}
	$tpl = Template::getInstance();
	$tpl->asignar('proyecto','Jukebox');
	$tpl->asignar('titulo',"Iniciar Session");
	$tpl->asignar('mensaje',$mensaje);
	$tpl->mostrar('usuarios_login');

}
>>>>>>> antonio
=======
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
	function perfil($params=array()){
		//Auth::estaLogueado();
		//Session::init();
		$id = 2;
		$usr=new Usuario();
		$ser=$usr->datos_usuario($id);
		if(!empty($params)){
			if($params[0]=="borrar"){
				$usuario=new Usuario();
				$idDelete=$params[1];
				if($usuario->borrar($idDelete)){
					$this->redirect("index","home");
				}
			}
		}

		$tpl = Template::getInstance();
		$tpl->asignar('proyecto',"Jukebox");
		$tpl->asignar('nick',$ser);
		$tpl->mostrar('ver_perfil');
	}
>>>>>>> Matias
}
?>