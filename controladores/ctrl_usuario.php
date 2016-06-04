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
	 		$usuario=new Usuario();
			$respuesta=$usuario->setUsuario($nick,$contra,$email);
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
	function perfil(){
		$tpl = Template::getInstance();
		$tpl->asignar('proyecto',"Jukebox");
		$tpl->asignar('mensaje',$mensaje);
		$tpl->mostrar('ver_perfil');
	}
}
?>