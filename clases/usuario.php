<?php
class Usuario extends ClaseBase {
	public $id=0;
    public $nombre = '';
	public $apellido = '';
    public $ci = '';
	public $edad = 0;
    public $email='';

    //Contructor que recibe un array
	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="usuarios";
        parent::__construct($tabla);

    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getApellido() {
        return $this->apellido;
    }
    public function getCI() {
        return $this->ci;
    }
    public function getEdad() {
        return $this->edad;
    }

    /** i: corresponde a variables de tipo integer (entero)
    * d: corresponde a variables de tipo double (decimal)
    * s: corresponde a variables de tipo string (cadenas de texto, como en el caso del ejemplo)
    * b: corresponde a variables de tipo blob (archivos)*/    

    public function getBusqueda($buscar){
        $buscar="%$buscar%";
        $stmt = $this->getDB()->prepare( 
            "SELECT id, nombre, apellido, edad , ci
         from usuarios
            WHERE nombre like ? " );
        $stmt->bind_param( "s",$buscar);

        $stmt->execute();
        $resultado=$stmt->get_result();
        while ($fila=$resultado->fetch_object()) {
            $persona= new Usuario($fila);
            $usuarios[]=$persona;
        }
        return $usuarios;
    }
    

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of email.
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the value of email.
     *
     * @param mixed $email the email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Sets the value of nombre.
     *
     * @param mixed $nombre the nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Sets the value of apellido.
     *
     * @param mixed $apellido the apellido
     *
     * @return self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Sets the value of ci.
     *
     * @param mixed $ci the ci
     *
     * @return self
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Sets the value of edad.
     *
     * @param mixed $edad the edad
     *
     * @return self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function agregar($pwd){
        
        $nombre=$this->getNombre();
        $ape=$this->getApellido();
        $edad=$this->getEdad();
        $ci=$this->getCI();
        $password = sha1($pwd);
        $email=$this->getEmail();

        $stmt = $this->getDB()->prepare( 
            "INSERT INTO usuarios 
        (nombre, apellido,edad, ci, email,pass) 
           VALUES (?,?,?,?,?,?)" );
        $stmt->bind_param("ssisss",$nombre,
            $ape,$edad,$ci,$email,$password);
        return $stmt->execute();
    
    }
}
?>