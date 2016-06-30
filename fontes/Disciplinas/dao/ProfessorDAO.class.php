<?php


class ProfessorDAO {
    private $pdo;
    
    public function __construct() {
        $conexao = new Conexao();
        $this->pdo = $conexao->getPDO();
    }
    
//    public function listar()
//    {
//        $lista = array();
//        $query = $this->pdo->prepare("SELECT * FROM professor");
//        $query->execute();
//        
//        while ($obj = $query->fetchObject()){
//            $lista[] = $obj;
//        }
//        
//        return $lista;
//    }
    
    public function inserir($obj)
    {
        $parametros = array(
            ':siape' => $obj -> siape,
            ':nome' => $obj -> nome
        );
        
        $sql = "INSERT INTO professor (siape, nome)"
                . "VALUES (:siape, :nome)";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function excluir($chavePrimaria)
    {
        $sql = "DELETE FROM professor WHERE siape = :siape";
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":siape", $chavePrimaria);
        $retorno->execute();
        
        return $retorno->rowCount();
    }
    
    public function alterar($obj)
    {
        $parametros = array(
            ':siape' => $obj -> siape,
            ':nome' => $obj -> nome,
        );
        
        $sql = "UPDATE professor SET "
                . "nome = :nome, "
                . "WHERE siape = :siape";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function buscarPorChavePrimaria($chavePrimaria)
    {
        $sql=("SELECT * FROM professor WHERE siape = :siape");
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":siape", $chavePrimaria);
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
        $sql = "SELECT * FROM professor ";
        if(isset($filtro))
        {
            $sql .= " WHERE nome ilike :filtro OR siape ilike :filtro";
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