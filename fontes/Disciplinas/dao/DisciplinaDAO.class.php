<?php
require 'Conexao.class.php';

require __DIR__.'/../modelo/Disciplina.class.php';

class DisciplinaDAO {
    private $pdo;
    
    public function __construct() {
        $conexao = new Conexao();
        $this->pdo = $conexao->getPDO();
    }
    
    public function inserir($obj)
    {
        $parametros = array(
            ':codigo' => $obj->codigo,
            ':nome' => $obj->nome,
            ':semestre' => $obj->semestre,
            ':codigocurso' => $obj->curso->codigo,
            ':siapeprofessor' => $obj->professor->siape
        );
        
        $sql = "INSERT INTO disciplina (codigo, nome, semestre, codigocurso, siapeprofessor)"
                . "VALUES (:codigo, :nome, :semestre, :codigocurso, :siapeprofessor)";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function excluir($chavePrimaria)
    {
        $sql = "DELETE FROM disciplina WHERE codigo = :codigo";
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":codigo", $chavePrimaria);
        $retorno->execute();
        
        return $retorno->rowCount();
    }
    
    public function alterar($obj)
    {
        $parametros = array(
            ':codigo' => $obj->codigo,
            ':nome' => $obj->nome,
            ':semestre' => $obj->semestre,
            ':codigocurso' => $obj->curso->codigo,
            ':siapeprofessor' => $obj->professor->siape
        );
        
        $sql = "UPDATE disciplina SET "
                . "nome = :nome, "
                . "semestre = :semestre, "
                . "codigocurso = :codigocurso, "
                . "siapeprofessor = :siapeprofessor "
                . "WHERE codigo = :codigo";
        $retorno = $this->pdo->prepare($sql);
        $retorno->execute($parametros);
        
        return $retorno->rowCount();
    }
    
    public function buscarPorChavePrimaria($chavePrimaria)
    {
        $sql="SELECT 
	 disciplina.codigo
	,disciplina.nome
	,disciplina.semestre
	,disciplina.codigocurso
	,disciplina.siapeprofessor
	,curso.nome AS nomecurso
	,professor.nome AS nomeprofessor
FROM
	disciplina,curso,professor
WHERE
	disciplina.codigocurso = curso.codigo 
	AND disciplina.siapeprofessor = professor.siape 
        AND disciplina.codigo = :codigo
        ";
        
        $retorno = $this->pdo->prepare($sql);
        $retorno->bindParam(":codigo", $chavePrimaria);
        $retorno->execute();
        //Objeto com os atributos da minha classe de modelo
        //incluindo as tabelas relacionadas
        
        $objCompleto = new Disciplina();
        if($obj=$retorno->fetchObject())
        {
            $objCompleto->codigo = $obj->codigo;
            $objCompleto->nome = $obj->nome;
            $objCompleto->semestre = $obj->semestre;
            $objCompleto->professor->siape = $obj->siapeprofessor;
            $objCompleto->professor->nome = $obj->nomeprofessor;
            $objCompleto->curso->codigo = $obj->codigocurso;
            $objCompleto->curso->nome = $obj->nomecurso;
            
            return $objCompleto;
        }
        else
        {
            return null;
        }
    }
    
    public function listar($filtro=null,$ordenarPor=null)
    {
        $parametros = array();
        $sql="SELECT 
	 disciplina.codigo
	,disciplina.nome
	,disciplina.semestre
	,disciplina.codigocurso
	,disciplina.siapeprofessor
	,curso.nome AS nomecurso
	,professor.nome AS nomeprofessor
FROM
	disciplina,curso,professor
WHERE
	disciplina.codigocurso = curso.codigo 
	AND disciplina.siapeprofessor = professor.siape 
        
        ";
        if(isset($filtro))
        {
            $sql .= "  AND (professor.nome ilike :filtro "
                    . "OR disciplina.nome ilike :filtro OR curso.nome ilike :filtro) ";
            $parametros[":filtro"] = "%".$filtro."%";
        }
        $lista = array();
        $query = $this->pdo->prepare($sql);
        
        $query->execute($parametros);
        
        //Percorrer meus registros, tratando-os como objeto
        
        while ($obj = $query->fetchObject()){
            $objCompleto = new Disciplina();
            $objCompleto->codigo = $obj->codigo;
            $objCompleto->nome = $obj->nome;
            $objCompleto->semestre = $obj->semestre;
            $objCompleto->professor->siape = $obj->siapeprofessor;
            $objCompleto->professor->nome = $obj->nomeprofessor;
            $objCompleto->curso->codigo = $obj->codigocurso;
            $objCompleto->curso->nome = $obj->nomecurso;
            $lista[] = $objCompleto;
        }
        
        return $lista;
    }
}
