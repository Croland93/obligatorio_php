<?php

require "clases/clase_base.php";
include_once("clases/playlist.php");
include_once("clases/cancionPlaylist.php");
include_once("clases/session.php");
require_once('clases/auth.php');


class ControladorListas extends ControladorIndex{
	


	function crearPlaylist($nombre){
		
		Session::init();
		$idUsuario = Session::get('usuario_id');
		
		$pl = new Playlist();
		$nuevaPL = $pl->crearPlaylist($nombre,$idUsuario);
		if($nuevaPL == false){
			if($nombre != "fav"){
				echo "Ya existe un playlist con ese nombre, intente con otro";
				return false;
			}	
		}else{
			if($nombre != "fav"){
				echo "Playlist creada con exito";
				return $pl;
			}	
		}

	}

	function agregarTema($datos){
		
		$id_PL = $datos[0];
		$id_cancion = $datos[1];

		$cpl = new CancionPlaylist();

		$verif = $cpl->addSong($id_PL, $id_cancion);
		if  ($verif == false){
			echo "ya existe esta cancion en esta playlist";

		}
		else echo "cancion agregada con exito";
		

	}

	function agregarFAV($id_cancion){

		$this->crearPlaylist("fav");
		$cpl = new CancionPlaylist();
		$verif = $cpl->addToFav($id_cancion);
		if ($verif == false){
			echo "esta cancion ya existe en favoritos";
			

		}else echo "cancion agregada con exito";

	}


	/*funcion que se llama al selecionar una PlayList para añadir una cancion*/
	function listarPlaylists($id_track){
		
		Session::init();
		$idUsuario = Session::get('usuario_id');

		if (!$idUsuario){
			echo "<span>Debes</span><a href='../obligatorio_php/usuario/getLogin/'> Iniciar sesion</a><span> para poder crear Playlist </span>";


		}
		else {
			Auth::estaLogueado();
			$PL = new Playlist();
			$res = $PL->listaPlaylists($idUsuario);


			if ($res==false){

				echo "<button id='crearPL'>Crear Playlist</button>";

			}else{

				$lista = json_encode($res);
				echo $lista;

			}
		}

	}


	
}


