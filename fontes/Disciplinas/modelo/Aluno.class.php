<?php

class Aluno {
    
    private $matricula;
    private $ativo;
    private $disciplinas;
    private $nome;

    public function __get($key){
        return $this->$key;
     }
     
    public function __set($key, $value){
        $this->$key = $value;
     }

}
