<?php
/*require "db/db.php";
require 'vendor/autoload.php';
require "controladores/ctrl_usuario.php";
getListado();*/


require "db/db.php";
require 'vendor/autoload.php';
require "controladores/ctrl_index.php";
require_once('clases/Singleton.php');
require_once('clases/template.php');
require_once('vendor/autoload.php');
$controlIndex=new ControladorIndex();

$tpl = Template::getInstance();
$tpl->asignar('url_base',URL_BASE);
$tpl->asignar('proyecto',"Jukebox");
$tpl->asignar('url_logout',$controlIndex->getUrl("usuario","logout"));

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
