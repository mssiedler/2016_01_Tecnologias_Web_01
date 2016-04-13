<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author marcelosiedler
 */
class Aluno {
    //put your code here
    private $matricula;
    private $ativo;
    private $disciplinas;
    private $nome;
   
   //método de captura de valores para o objeto
    public function __get($key){
      return $this->$key;
    }
    //end __get()
    //
    //método de retorno de valores do objeto
    public function __set($key, $value){
      $this->$key = $value;
    }//end __set()
    
    
    
}
