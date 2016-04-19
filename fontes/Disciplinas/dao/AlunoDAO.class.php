<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlunoDAO
 *
 * @author marcelosiedler
 */

require 'Conexao.class.php';

class AlunoDAO {
    //put your code here
    private $pdo;
    public function __construct() {
        //AQUI é feita a conexão com o Banco
        $conexao = new Conexao();
        $this->pdo = $conexao->getPDO();
    }
    //Listar
    public function listar()
    {
        //lista de alunos
        $lista = array();
        $query = $this->pdo->prepare("SELECT * FROM aluno");
        $query->execute();
        //percorrer meus registros
        //tratando-os como objeto
        while ($obj = $query->fetchObject()) {
           $lista[] = $obj; 
        }
        
        return $lista;
    }
    
    public function inserir($obj)
    {
        //Monta os parâmetros
        $parametros = array(
	':matricula' => $obj->matricula,
	':disciplinas' => $obj->disciplinas,
        ':nome' => $obj->nome,
	':ativo' => $obj->ativo
        );
        //prepara o sql
        $sql = "INSERT INTO aluno (matricula, disciplinas,"
                . "nome,ativo) VALUES (:matricula, :disciplinas, :nome, :ativo)";
        $retorno = $this->pdo->prepare($sql);
        
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
        
    }
    
    public function excluir($chavePrimaria)
    {
        $sql = "DELETE FROM aluno where matricula = :matricula";
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":matricula", $chavePrimaria);
        $retorno->execute();
        
        return $retorno->rowCount();
    }
    
    public function alterar($obj)
    {
        $parametros = array(
          ":matricula" => $obj->matricula,
          ":disciplinas" => $obj->disciplinas,
          ":nome" => $obj->nome,
          ":ativo" => $obj->ativo
        );
        
        $sql = "UPDATE aluno SET "
                . "disciplinas=:disciplinas, "
                . "nome=:nome, "
                . "ativo=:ativo"
                . " WHERE matricula=:matricula";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function buscarPorChavePrimaria($chavePrimaria)
    {
        $sql = "SELECT * FROM aluno WHERE matricula=:matricula";
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":matricula", $chavePrimaria);
        $retorno->execute();
        if($obj = $retorno->fetchObject())
        {
            return $obj;
        }
        else
        {
            return null;
        }
        
    }
    
}
