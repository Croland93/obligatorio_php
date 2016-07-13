<?php




class CancionPlaylist extends ClaseBase{

	private $id_playlist; 
	private $id_cancion; 
	private $nombre; 
	private $artista;

    public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="temas_playlist";
        parent::__construct($tabla);

    }

/*Agregar cancion a playlist en la bd*/
	public function addSong($id_PL, $id_cancion){
		
        $id_playlist = (int) $id_PL;

        /*busca la cancion en esa playlist*/        
		$stmt1 = $this->getDB()->prepare("SELECT * FROM temas_playlist WHERE id_cancion='$id_cancion' AND id_playlist = $id_playlist");
        
		$verif = $stmt1->execute();
        $stmt1->store_result();

        
     /*si la cancion ya esta en la playlist retorna false, si no esta la agrega*/
        if ($stmt1->num_rows>0){		

			return false;
		}else{
			
			$stmt2 = $this->getDB()->prepare("INSERT INTO temas_playlist values ($id_playlist, '$id_cancion',NULL,NULL)");
            $query = "INSERT INTO temas_playlist values ($id_playlist, '$id_cancion',NULL,NULL)";
            
			$resultado = $stmt2->execute();
           
            
			return true;
		}
	}

    public function addToFav($cancion){

        $id_cancion = $cancion[0];
        $stmt = $this->getDB()->prepare("SELECT idPlaylist as idPL FROM playlists WHERE nombre='fav'");
        $stmt->execute();
        $res = $stmt->get_result();
        $ret = array();

        foreach ($res as $key) {
            $ret[] = array('id' => $key['idPL']);
        }
        /*id de favoritos*/
        $id_playlist = $ret[0]['id'];
        /*busca la cancion en esa favoritos*/
        $stmt1 = $this->getDB()->prepare("SELECT * FROM temas_playlist WHERE id_cancion='$id_cancion' AND id_playlist = $id_playlist");


        $verif = $stmt1->execute();

        $stmt1->store_result();
        
     /*si la cancion ya esta en la playlist retorna false, si no esta la agrega*/
        if ($stmt1->num_rows>0){        

            return false;
        }else{
            
            $stmt2 = $this->getDB()->prepare("INSERT INTO temas_playlist values ($id_playlist, '$id_cancion',NULL,NULL)");
            $query = "INSERT INTO temas_playlist values ($id_playlist, '$id_cancion',NULL,NULL)";
            
            $resultado = $stmt2->execute();
           
            
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