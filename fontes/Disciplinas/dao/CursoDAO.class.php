<?php
require_once 'Conexao.class.php';

class CursoDAO {
    private $pdo;
    
    public function __construct() {
        $conexao = new Conexao();
        $this->pdo = $conexao->getPDO();
    }

    private function cadastrarProfessores($codigocurso, $professores)
    {
        foreach($professores as $prof)
            {
                $siape = $prof->siape;
                $sql = "INSERT INTO cursoprofessor (siape,codigocurso)"
                    . "VALUES (:siape, :codigocurso)";
                $retorno = $this->pdo->prepare($sql);
                $retorno->bindParam(":siape", $siape);
                $retorno->bindParam(":codigocurso", $codigocurso);

                $retorno->execute();
            }
        
    }
    
    public function inserir($obj)
    {
        $parametros = array(
            ':nome' => $obj -> nome,
        );
        
        $sql = "INSERT INTO curso (nome)"
                . "VALUES (:nome)";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        if($retorno->rowCount()>0)
        {
            $codigocurso = $this->buscarCodigo();
            $this->cadastrarProfessores($codigocurso, $obj->professores);
            return  1;
        }
        else
        {
            return 0;
        }
    }
    
    public function excluir($chavePrimaria)
    {
        //ANTES DE EXCLUIR O CURSO .. excluir todos os registro da codigocurso que 
        //TEM O CURSO QUE DESEJA-SE EXCLUIR
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
            $obj->professores = $this->buscarProfessores($chavePrimaria);
            return $obj;
        }
        else
        {
            return null;
        }
    }
    
    private function buscarProfessores($chavePrimaria)
    {
        $sql = "select 
	professor.nome, 
	professor.siape 
from 
	cursoprofessor 

inner join professor ON professor.siape=cursoprofessor.siape
where 
	codigocurso=:codigo";
        
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":codigo", $chavePrimaria);
        $retorno->execute();
        $profs = array();
        while($obj=$retorno->fetchObject())
        {
            
            $profs[] = $obj;
        }
        
        return $profs;
        
        
    }
    
    private function buscarCodigo()
    {
        
        $sql = "select currval('curso_codigo_seq') as codigo";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $obj = $query->fetchObject();
        return $obj->codigo;
    }
            
    
    public function listar($filtro=null, $ordenarPor=null)
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
            $obj->professores = $this->buscarProfessores($obj->codigo);
            $lista[] = $obj;
        }
        
        return $lista;
    }
}
