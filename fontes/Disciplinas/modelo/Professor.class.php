<?php

class Professor {
    
    private $siape;
    private $nome;
    
    public function __get($key){
        return $this->$key;
     }
     
    public function __set($key, $value){
        $this->$key = $value;
     }
}
