<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index_controller
 *
 * @author Death
 */
class Index_controller extends Controller {
    
    function __construct() {
        parent::__construct();
    }

    
    public function index($param = null){
        if(empty($param)){
            $param = "tu";
        }
        
        echo "Hola ".$param;
    }
    
    public function crearUsuario(){
        if(isset($_GET["username"]) && isset($_GET["password"])){
            
            $username = $_GET["username"];
            $password = $_GET["password"];
            
            $usuario = new Usuario(null, $username, $password);
            $usuario->create();
            print_r($usuario);
            
            echo "<br> Todos los usuarios:<br>";
            print_r(Usuario::getAll());
        }
    }
    
    public function buscar($username){
        
        if(!empty($username)){
            $r = Usuario::getBy("username", $username);
            if(is_null($r)){
                echo "no existe ese usuario";
            }else{
                print_r($r);
            }
        }
            
    }
    
}
