<?php



class Playlist extends ClaseBase{


	private $idUsuario;
	private $nombre;
	private $idPlaylist;




	public function getIdususario(){
		return $this->idUsuario;
	}


	public function setIdususario($idUsuario){
		$this->idUsuario = $idUsuario;

		return $this;
	}


	public function getNombre(){
		return $this->nombre;
	}


	public function setNombre($nombre){
		$this->nombre = $nombre;

		return $this;
	}


	public function getIdPlaylist(){
		return $this->idPlaylist;
	}


	public function setIdPlaylist($idPlaylist){
		$this->idPlaylist = $idPlaylist;

		return $this;
	}



	public function crearPlaylist($nombre,$idUsuario){

		// $Pl = new Playlist();
		// $Pl->setNombre($nombre);
		// $Pl->setIdususario($idUsuario);
		$stmt1 = $this->getDB()->prepare("SELECT * FROM playlist WHERE nombre=$nombre AND idUsuario=$idUsuario");
		$verif = $stmt->execute();
		if (mysqli_num_rows($verif)>0){
			return false;
		}else{
			$Pl->setNombre($nombre);
			$Pl->setIdususario($idUsuario);
			$stmt = $this->getDB()->prepare("INSERT INTO playlist values (NULL,$nombre,$idUsuario)");
			$resultado = $stmt->execute();
			return $Pl;


		}

	}



	public function listaPlaylists($userId){

		$stmt1 = $this->getDB()->prepare("SELECT nombre as nombreP FROM playlist WHERE idUsuario=$userId");
		$res = $stmt->execute();
		if (mysqli_num_rows($res==0)){		
			return false;

		}else{

		$ret = array();

		foreach ($res as $key) {
			$ret[] = array('nombre' => $key['nombreP']);
		}

		return $ret;

		}
	}


}