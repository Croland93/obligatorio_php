<?php

require "clases/clase_base.php";
include_once("clases/playlist.php");
include_once("clases/cancionPlaylist.php");


class ControladorListas extends ControladorIndex{
	


	function crearPlaylist($nombre){

		Session::init();
		$idUsuario = Session::get('usuario_id');
		$pl = new Playlist();
		$nuevaPL = $pl->crearPlaylist($nombre,$idUsuario);
		if($nuevaPL == false){

			echo "Ya existe un playlist con ese nombre, intente con otro";

		}else{

			echo "Playlist creada con exito";
			return $pl;
		}

	}

	function agregarCancion($id_playlist, $id_cancion, $nombre, $artista){

		$cpl = new CancionPlaylist();

		$verif = $cpl->addSong($id_playlist, $id_cancion, $nombre, $artista);
		if  ($verif == false){
			echo "ya existe esta cancion en esta playlist";

		}
		else echo "cancion agregada con exito";
		

	}

	function listarPlaylists(){
		Session::init();
		$idUsuario = Session::get('usuario_id');
		$PL = new Playlist();
		$res = $PL->listaPlaylists($idUsuario);

		
		if ($res==false){
			echo "no existen playlists";
		}else{

			$tpl = Template::getInstance();
			$listaPL = array('nombre' => $res);
			$tpl->mostrar('dashboard',$listaPL);

		}


	}


	
}


