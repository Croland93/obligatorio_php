<?php



class Playlist extends ClaseBase{


	private $idUsuario;
	private $nombre;
	private $idPlaylist;

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="playlists";
        parent::__construct($tabla);

    }


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
		if($nombre!="fav")
			$nombrePL = $nombre[0];
		else 
			$nombrePL = $nombre; 

		$Pl = new Playlist();
		
		$stmt1 = $this->getDB()->prepare("SELECT * FROM playlists WHERE nombre='$nombrePL' AND idUsuario=$idUsuario");		
		$verif = $stmt1->execute();

		$stmt1->store_result();
		if ($stmt1->num_rows>0){
			return false;
		}else{
			$Pl->setNombre($nombre);
			$Pl->setIdususario($idUsuario);
			$stmt = $this->getDB()->prepare("INSERT INTO playlists values (NULL,$idUsuario,'$nombrePL')");
			$resultado = $stmt->execute();
			
			return $Pl;
		}

	}



	public function listaPlaylists($userId){

		$stmt1 = $this->getDB()->prepare("SELECT nombre as nombreP, idPlaylist as idPL FROM playlists WHERE idUsuario=$userId");
		$stmt1->execute();
		$res = $stmt1->get_result();

		
		if (mysqli_num_rows($res)==0){	

			return false;

		}else{

		$ret = array();

		foreach ($res as $key) {
			if ($key['nombreP']=='fav')continue;
			$ret[] = array('nombre' => $key['nombreP'],
						'id' => $key['idPL']);
		}
		// var_dump($ret);
		return $ret;

		}
	}


}