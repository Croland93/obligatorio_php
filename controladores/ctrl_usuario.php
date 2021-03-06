<?php
require "clases/clase_base.php";
require "clases/usuario.php";
require_once('clases/template.php');

class ControladorUsuario extends ControladorIndex {
	function nuevo(){
	$mensaje = '';
	if(isset($_POST["nombre"])){
		$nick=($_POST["nickname"]);
 		$nombre=($_POST["nombre"]);
 		$apellido=($_POST["apellido"]);
 		$contra=($_POST["pass"]);
 		$email=($_POST["email"]);
 		$usuario=new Usuario();
		$respuesta=$usuario->setUsuario($nombre,$apellido,$nick,$contra,$email);
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
}
?>