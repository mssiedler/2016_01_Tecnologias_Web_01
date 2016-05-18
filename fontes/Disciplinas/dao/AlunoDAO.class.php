<?php
require_once 'Conexao.class.php';

class AlunoDAO {
    private $pdo;
    
    public function __construct() {
        //Aqui é feita a conexão com o BD
        $conexao = new Conexao();
        $this->pdo = $conexao->getPDO();
    }
    
    //Listar
  //  public function listar()
  //  {
        //Lista de alunos
  //      $lista = array();
  //      $query = $this->pdo->prepare("SELECT * FROM aluno");
  //      $query->execute();
        
        //Percorrer meus registros, tratando-os como objeto
  //      while ($obj = $query->fetchObject()){
  //          $lista[] = $obj;
  //      }
        
  //      return $lista;
  //  }
    
    public function inserir($obj)
    {
        //Mostra os parâmetros
        $parametros = array(
            ':matricula' => $obj -> matricula,
            ':disciplinas' => $obj -> disciplinas,
            ':nome' => $obj -> nome,
            ':ativo' => $obj -> ativo
        );
        
        //Prepara o sql
        $sql = "INSERT INTO aluno (matricula, disciplinas, nome, ativo)"
                . "VALUES (:matricula, :disciplinas, :nome, :ativo)";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function excluir($chavePrimaria)
    {
        $sql = "DELETE FROM aluno WHERE matricula = :matricula";
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":matricula", $chavePrimaria);
        $retorno->execute();
        
        return $retorno->rowCount();
    }
    
    public function alterar($obj)
    {
        $parametros = array(
            ':matricula' => $obj -> matricula,
            ':disciplinas' => $obj -> disciplinas,
            ':nome' => $obj -> nome,
            ':ativo' => $obj -> ativo
        );
        
        $sql = "UPDATE aluno SET "
                . "disciplinas = :disciplinas, "
                . "nome = :nome, "
                . "ativo = :ativo "
                . " WHERE matricula = :matricula";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function buscarPorChavePrimaria($chavePrimaria)
    {
        $sql=("SELECT * FROM aluno WHERE matricula = :matricula");
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":matricula", $chavePrimaria);
        $retorno->execute();
       
        if($obj=$retorno->fetchObject())
        {
            return $obj;
        }
        else
        {
            return null;
        }
    }
    
    public function listar($filtro=null,$ordenarPor=null)
    {
        $parametros = array();
        $sql = "SELECT * FROM aluno ";
        if(isset($filtro))
        {
            $sql .= " WHERE nome ilike :filtro OR matricula ilike :filtro";
            $parametros[":filtro"] = "%".$filtro."%";
        }
        $lista = array();
        $query = $this->pdo->prepare($sql);
        
        $query->execute($parametros);
        
        //Percorrer meus registros, tratando-os como objeto
        while ($obj = $query->fetchObject()){
            $lista[] = $obj;
        }
        
        return $lista;
    }
}
