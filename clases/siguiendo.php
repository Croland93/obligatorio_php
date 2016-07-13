<?php
require_once "clases/session.php";
class Siguiendo extends ClaseBase {
    public $idFollower = '';
    public $nickStalked = '';
    public $idUsuario = '';

    //Contructor que recibe un array
	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="siguiendo";
        parent::__construct($tabla);

    }
    public function getIdfollower() {
        return $this->idFollower;
    }
    public function getNickstalked() {
        return $this->nickStalked;
    }
    public function getIdusuario() {
        return $this->idUsuario;
    }
    
}

?>