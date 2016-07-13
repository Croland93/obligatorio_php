<?php
class Auth extends ControladorIndex
{
    public  static function estaLogueado()
    {
    	Session::init();
        if (!isset($_SESSION['usuario_id'])) {
            Session::destroy();
            header("Refresh:0; url=http://localhost:8888/obligatorio_php/home");
            exit();
        }
    }
}?>