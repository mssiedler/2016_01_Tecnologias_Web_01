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
 */

require 'Conexao.class.php';
class UsuarioDAO {
    //put your code here
    private $pdo;
    
    public function __construct() {
        $conexao = new Conexao();
        $this->pdo = $conexao->getPDO();
    }
    
    public function listar()
    {
        $sql = "SELECT * FROM usuario";
        $lista = array();
        $query = $this->pdo->prepare($sql);
        $query->execute();
        while($obj = $query->fetchObject())
        {
            $lista[] = $obj;
        }
        
        return $lista;
    }
    
    public function inserir($obj)
    {
        $parametros = array
        (
            ":login" =>$obj->login,
            ":senha" =>$obj->senha,
            ":email" =>$obj->email

        );
        $sql = "INSERT INTO usuario (login, senha,email)"
                . "values(:login, :senha, :email)";
        $query = $this->pdo->prepare($sql);
        $query->execute($parametros);
        
        return $query->rowCount();
        
    }
    
    public function atualizar($obj){
        $parametros = array
        (
            ":login" =>$obj->login,
            ":senha" =>$obj->senha,
            ":email" =>$obj->email,
            ":id" => $obj->id

        );
        $sql = "UPDATE usuario SET "
                . "login = :login "
                . ",senha = :senha"
                . ",email = :email"
                . " WHERE id=:id";
        $query = $this->pdo->prepare($sql);
        $query->execute($parametros);
        
        return $query->rowCount();
    }
    public function excluir($chavePrimaria)
    {
        $sql = "DELETE FROM usuario WHERE id=:id";
        $query = $this->pdo->prepare($sql);
        $query->bindParam(":id", $chavePrimaria);
        $query->execute();
        return $query->rowCount();
        
    }
    
    public function buscarPorChavePrimaria($chavePrimaria)
    {
        $sql = "SELECT * FROM usuario WHERE id=:id";
        $query = $this->pdo->prepare($sql);
        $query->bindParam(":id", $chavePrimaria);
        $query->execute();
        
        if($obj = $query->fetchObject())
        {
            return $obj;
        }
        else
        {
            return null;
        }
        
        
    }
}
