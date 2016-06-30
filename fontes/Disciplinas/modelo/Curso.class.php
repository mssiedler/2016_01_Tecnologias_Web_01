<?php

class Curso {
    
    private $codigo;
    private $nome;
    private $professores;
    
    public function __construct(){
        $this->professores = array();
    }
 
    public function __get($key){
        return $this->$key;
     }
     
    public function __set($key, $value){
        $this->$key = $value;
     }
}
