<?php
require "clases/session.php";
class Usuario extends ClaseBase {
    public $id = '';
    public $nickname = '';
    public $nombre = '';
	public $apellido = '';
    public $email = '';
    public $clave = '';
    public $img = '';

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
        return $this->clave;
    }

    public function getEmail(){
    	return $this->email;
    }

    public function getImg(){
    	return $this->img;
    }

    public function getId(){
        return $this->id;
    }

    public function setUsuario($nick,$pass,$email,$avatar){
        $nic=$nick;
        $p=$pass;
        $mail=$email;
<<<<<<< HEAD
<<<<<<< HEAD
        $stmt = $this->getDB()->prepare("INSERT INTO usuarios (nombre,apellido,nickname,clave,email) VALUES ('$nom', '$a', '$nic', $p, '$mail')");
=======
        $stmt = $this->getDB()->prepare("INSERT INTO usuarios (nombre,apellido,nickname,clave,email) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ss", $nom, $a, $nic, $p, $mail);
>>>>>>> antonio
        $stmt->execute();
        return true;
=======
        $image=$avatar;
        $stmt = $this->getDB()->prepare("INSERT INTO usuarios (nickname,clave,email,img) VALUES ('$nic', '$p', '$mail', '$image')");
        $resultado = $stmt->execute();
        return $resultado;
>>>>>>> Matias
    }

<<<<<<< HEAD
    public function autentificar($nick,$pass){
        $stmt = $this->getDB()->prepare("SELECT * from usuarios WHERE nickname=? AND clave=?");
        $stmt->bind_param( "ss",$nick,$pass);
        $stmt->execute();
        $result=$stmt->get_result();
        $objeto=$result->fetch_object();
        if(isset($objeto)){
            Session::init();
            Session::set($nick,true);
=======
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

>>>>>>> antonio
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

    public function datos_usuario($usuario_id){
        $stmt = $this->getDB()->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->bind_param("i",$usuario_id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if ($fila = $resultado->fetch_object()){
            $res = new Usuario($fila);
        }
        return $res;
    }

    public function borrar($id){
        $stmt = $this->getDB()->prepare("DELETE FROM usuarios WHERE id=$id");
        $stmt->execute();
        $resultado=false;
        if($this->getDB()->affected_rows>0){
            $resultado=true;
        }
        return $resultado;
    }
}

?>