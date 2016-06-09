<?php
/*require "db/db.php";
require 'vendor/autoload.php';
require "controladores/ctrl_usuario.php";
getListado();*/

/*ini_set("display_errors", 1);
error_reporting(E_ALL & ~E_NOTICE);*/

require "db/db.php";
require 'vendor/autoload.php';
require "controladores/ctrl_index.php";
require_once('clases/Singleton.php');
require_once('clases/template.php');
require_once('vendor/autoload.php');
require_once('clases/session.php');
$controlIndex=new ControladorIndex();

$tpl = Template::getInstance();
$tpl->asignar('url_base',URL_BASE);
$tpl->asignar('proyecto',"Jukebox");
$tpl->asignar('url_logout',$controlIndex->getUrl("usuario","logout"));

Session::init();
$usuario_logueado=Session::get('usuario_logueado');
$usuario_id=Session::get('usuario_id');
$usuario_nick=Session::get('usuario_nick');
$usuario_email=Session::get('usuario_email');
$tpl->asignar('usuario_logueado',$usuario_logueado);
$tpl->asignar('usuario_id',$usuario_id);
$tpl->asignar('usuario_nick',$usuario_nick);
$tpl->asignar('usuario_email',$usuario_email);
//Cargamos controladores y acciones
if(isset($_GET['url'])){
	$query = $_GET['url'];
	$request = explode('/', $query);
	$controller = (!empty($request[0])) ? $request[0] : 'index';
	$action = (!empty($request[1])) ? $request[1] : 'home';
	$params=array();
	for ($i=2; $i <count($request) ; $i++) { 
		$params[]=$request[$i];
	}
}else{
	$controller="index";
	$action="home";
	$params=array();
}

if (isset($_POST['buscar'])){

	$buscar = $_POST['buscar'];
	$controller="api";
	$action="busqueda";
	$params=$buscar;
}


$controllerObj=$controlIndex->cargarControlador($controller);
$controlIndex->ejecutarAccion($controllerObj,$action,$params);

?>
