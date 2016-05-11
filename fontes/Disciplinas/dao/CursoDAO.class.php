<?php
require 'Conexao.class.php';

class CursoDAO {
    private $pdo;
    
    public function __construct() {
        $conexao = new Conexao();
        $this->pdo = $conexao->getPDO();
    }
    
 //   public function listar()
 //   {
 //       $lista = array();
 //       $query = $this->pdo->prepare("SELECT * FROM curso");
 //       $query->execute();
 //       
 //       while ($obj = $query->fetchObject()){
 //           $lista[] = $obj;
 //       }
 //      
 //       return $lista;
 //   }
    
    public function inserir($obj)
    {
        $parametros = array(
            ':nome' => $obj -> nome,
        );
        
        $sql = "INSERT INTO curso (nome)"
                . "VALUES (:nome)";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function excluir($chavePrimaria)
    {
        $sql = "DELETE FROM curso WHERE codigo = :codigo";
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":codigo", $chavePrimaria);
        $retorno->execute();
        
        return $retorno->rowCount();
    }
    
    public function alterar($obj)
    {
        $parametros = array(
            ':codigo' => $obj -> codigo,
            ':nome' => $obj -> nome,
        );
        
        $sql = "UPDATE curso SET "
                . "nome = :nome "
                . "WHERE codigo = :codigo";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function buscarPorChavePrimaria($chavePrimaria)
    {
        $sql=("SELECT * FROM curso WHERE codigo = :codigo");
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":codigo", $chavePrimaria);
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
        $sql = "SELECT * FROM curso ";
        if(isset($filtro))
        {
            $sql .= " WHERE nome ilike :filtro";
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
