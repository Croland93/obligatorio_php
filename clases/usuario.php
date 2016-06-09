<?php
require_once "clases/session.php";
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
        $image=$avatar;
        $stmt = $this->getDB()->prepare("INSERT INTO usuarios (nickname,clave,email,img) VALUES ('$nic', '$p', '$mail', '$image')");
        $resultado = $stmt->execute();
        return $resultado;
    }

    public function login($email,$pass){
        $stmt = $this->getDB()->prepare("SELECT * FROM  usuarios WHERE email=? AND clave=?");
        $stmt->bind_param("ss",$email,$pass);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if($resultado->num_rows<1){
            return false;
        }    
        $res=$resultado->fetch_object();
        return $res;
    }

    public function logout(){
        Session::init();
        Session::destroy();
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