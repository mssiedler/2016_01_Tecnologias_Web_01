<?php
require __DIR__.'/Curso.class.php';
require __DIR__.'/Professor.class.php';
class Disciplina {
    
    private $codigo;
    private $nome;
    private $semestre;
    private $curso;
    private $professor;
    
    public function __construct() {
        $this->curso = new Curso();
        $this->professor = new Professor();
    }
    
    public function __get($key){
        return $this->$key;
     }
     
    public function __set($key, $value){
        $this->$key = $value;
     }
}
