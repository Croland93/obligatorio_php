<?php




class CancionPlaylist extends ClaseBase{

	private $id_playlist; 
	private $id_cancion; 
	private $nombre; 
	private $artista;




	public function addSong($id_playlist, $id_cancion, $nombre, $artista){
		

		$stmt1 = $this->getDB()->prepare("SELECT * FROM temas_playlist WHERE id_cancion=$id_cancion AND id_playlist = $id_playlist");
		$verif = $stmt->execute();
		if (mysqli_num_rows($verif)>0){
			return false;
		}else{
			
			$stmt1 = $this->getDB()->prepare("INSERT INTO temas_playlist values ($id_playlist, $id_cancion, $nombre, $artista");
			$resultado = $stmt->execute();
			return true;
		}
	}



    public function getIdPlaylist()
    {
        return $this->id_playlist;
    }

   
    public function setIdPlaylist($id_playlist)
    {
        $this->id_playlist = $id_playlist;

        return $this;
    }


    public function getIdCancion()
    {
        return $this->id_cancion;
    }

 
    public function setIdCancion($id_cancion)
    {
        $this->id_cancion = $id_cancion;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

  
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

  
    public function getArtista()
    {
        return $this->artista;
    }

  
    public function setArtista($artista)
    {
        $this->artista = $artista;

        return $this;
    }
}