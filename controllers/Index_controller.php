<?php

class Index_controller{
    public function index($param = null){
        if(empty($param)){
            $param ="Tu";
    }
    echo "Hola".$param;
    
}}