<?php
require "clases/clase_base.php";
require "clases/usuario.php";

 		
 function listado(){
	$buscar="";
 	if(isset($_POST["buscar"])){

 		$usuario=new Usuario();
 		$buscar=$_POST["buscar"];
		$usuarios=$usuario->getBusqueda($buscar);	
		
 	}else{
 		$usuario=new Usuario();
		$usuarios=$usuario->getListado();	
 	}

	
	//Llamar a la vista
	require_once('clases/template.php');
 	$tpl = new Template();
 	$datos = array(
    'usuarios' => $usuarios,
    'buscar' => $buscar,
    );

	$tpl->asignar('proyecto',"Listado de Usuarios");
	$tpl->mostrar('usuarios_listado',$datos);

}

function upload(){
	// http://www.w3schools.com/php/php_file_upload.asp
}


?>