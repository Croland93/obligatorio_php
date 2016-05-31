<?php
require "clases/session.php";
class Usuario extends ClaseBase {
    public $nombre = '';
	public $apellido = '';
	public $nickname = '';
    public $password = '';
    public $email = '';
    public $avatar_img = '';

    //Contructor que recibe un array
	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="usuario";
        parent::__construct($tabla);

    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getNick() {
        return $this->nickname;
    }
    public function getPass(){
        return $this->password;
    }

    public function getEmail(){
    	return $this->email;
    }

    public function getImg(){
    	return $this->avatar_img;
    }

    public function setUsuario($nick,$pass,$email){
        $nic=$nick;
        $p=$pass;
        $mail=$email;
        $stmt = $this->getDB()->prepare("INSERT INTO usuarios (nickname,clave,email) VALUES ('$nic', '$p', '$mail')");
        $resultado = $stmt->execute();
        return $resultado;
    }

    public function autentificar($nick,$pass){
        $stmt = $this->getDB()->prepare("SELECT * from usuarios WHERE nickname=? AND clave=?");
        $stmt->bind_param( "ss",$nick,$pass);
        $stmt->execute();
        $result=$stmt->get_result();
        $objeto=$result->fetch_object();
        if(isset($objeto)){
            Session::init();
            Session::set($nick,true);
            return true;
        } else {
            return false;
        }
    }

    public function availability($nick){
        $stmt = $this->getDB()->prepare("SELECT * FROM usuarios WHERE nickname =?");
        $stmt->bind_param("s",$nick);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $disponible = mysqli_num_rows($resultado);
        if ($disponible==0){
            return 1;
        } else {
            return 0;
        }
    }

    public function availability_email($email){
        $stmt = $this->getDB()->prepare("SELECT * FROM usuarios WHERE email =?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $disponible = mysqli_num_rows($resultado);
        if ($disponible==0){
            return 1;
        } else {
            return 0;
        }
    }
}

?>