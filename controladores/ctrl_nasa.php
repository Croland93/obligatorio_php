<?php
require "clases/clase_base.php";
require "clases/usuario.php";
require_once('clases/template.php');
require_once('clases/session.php');
require_once('clases/auth.php');

class ControladorNasa extends ControladorIndex {

 function ver($params=array()){
 	
 	$headers = array('Accept' => 'application/json');
	$options = array();


	$request = Requests::get('https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1000&api_key=oxkpLEHEMoPd8DRrFASEp4aZkfNZPOUKsGQ15Bja', $headers, $options);
 	

	$resultado=json_decode($request->body);

	$r=rand(0,24);
	$foto=$resultado->photos[$r];










	$headers = array('Accept' => 'application/json');
	$options = array();
	$request2 = Requests::get('http://marsweather.ingenology.com/v1/latest/', $headers, $options);
 	

	//var_dump($request2->body);

	$clima=json_decode($request2->body)->report;

	//var_dump($clima);

	//Llamar a la vista
 	$tpl = Template::getInstance();
 	$datos = array(
    'foto' => $foto,'clima' => $clima );

    //var_dump($request);

	
	$tpl->mostrar('nasa',$datos);

}

}
?>