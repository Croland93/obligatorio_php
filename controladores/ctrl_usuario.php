<?php
require "clases/clase_base.php";
require "clases/usuario.php";
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
				$mensaje="Error! No se pudo comprobar datos";
			}else{
				Session::init();
				Session::set('usuario_logueado', true);
		        Session::set('usuario_id', $res->id);
		        Session::set('usuario_nick', $res->nickname);
		        Session::set('usuario_email', $res->email);
		        Session::set('usuario_imagen', $res->img);
				$mensaje="usuario logueado";
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
		$tpl = Template::getInstance();
		$tpl->asignar('proyecto',"Jukebox");
		$tpl->mostrar('vp-editar_perfil');
	}
}
?>