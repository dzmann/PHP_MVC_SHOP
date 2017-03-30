<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author Death
 */
class View {
    public function render($controller, $view, $title=''){
        $controller = get_class($controller);
        $controller = substr($controller, 0, -11);
        $path = '.views/'.$controller.'/'.$view;
        
        if(file_exists($path.".php")){
            if($title != ""){
                $this->title=$title;
            }
            require $path.".php";
        }else if(file_exists($path.".html")){
            if($title != ""){
                $this->title=$title;
            }
            require $path.".html";
    }else{
        echo "Error: invalid view ".$view." to render";
    }
}
}