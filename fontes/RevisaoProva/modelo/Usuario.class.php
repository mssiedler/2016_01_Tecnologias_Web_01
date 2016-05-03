<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author marcelosiedler
 *  id serial NOT NULL,
  login character varying(50) NOT NULL,
  senha character varying(50) NOT NULL,
  email character varying(50) NOT NULL,
  CONSTRAINT usuario_pkey PRIMARY KEY (id)
 */
class Usuario {
    //put your code here
    
    private $id;
    private $login;
    private $senha;
    private $email;
    
    
    public function __get($chave){
        return $this->$chave;
    }
    
    public function __set($chave, $valor){
        $this->$chave = $valor;
    }
         
    
}
