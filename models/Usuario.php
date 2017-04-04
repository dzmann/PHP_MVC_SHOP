<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Death
 */
class Usuario extends Model {
    
    protected static $table = "Usuario";
    
    private $id;
    private $username;
    private $password;
    

    
    private $known_as = array(
        'Owner' => array(
            'class' => 'Tienda',
            'join_as' => 'id',
            'join_with' => 'owner',
        )
    );
    
    function getKnown_as() {
        return $this->known_as;
    }

    function setKnown_as($known_as) {
        $this->known_as = $known_as;
    }

        
     private $has_many = array(
      'Amigos' => array(
        'class' => 'Usuario',
        'my_key'=> 'id',
        'other_key' => 'id',  
        'join_other_as' => 'idAmigo',
        'join_self_as' => 'idUsuario',
        'join_table' => 'amigos'  
      )
        
    );
    
    
    
    function __construct($id, $username, $password) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }
    
    public function getMyVars(){
        return get_object_vars($this);
    }
    
    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function getHas_many() {
        return $this->has_many;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }



}
