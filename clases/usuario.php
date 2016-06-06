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

    public function setUsuario($nombre,$apellido,$nick,$pass,$email){
        $nom=$nombre;
        $a=$apellido;
        $nic=$nick;
        $p=$pass;
        $mail=$email;
        $stmt = $this->getDB()->prepare("INSERT INTO usuarios (nombre,apellido,nickname,clave,email) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ss", $nom, $a, $nic, $p, $mail);
        $stmt->execute();
        return true;
    }

    public function autentificar($email,$pass){
        
        $stmt = $this->getDB()->prepare("SELECT * from usuarios WHERE email=? AND clave=?");
        $stmt->bind_param( "ss",$email,$pass);
        $stmt->execute();
        $result=$stmt->get_result();
        $objeto=$result->fetch_object();

        if(isset($objeto)){

            Session::init();
            Session::set('usuario_logueado', true);
            Session::set('usuario_id', $objeto->id);
            Session::set('usuario_nombre', $objeto->nick);

            return true;
        } else {
            return false;
        }
    }
}

?>