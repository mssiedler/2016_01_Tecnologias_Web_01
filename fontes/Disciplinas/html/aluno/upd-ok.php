<?php
//Verificar se veio os campos obrigatórios
if(!isset($_POST["txtMatricula"]) || !isset($_POST["txtNome"]))
{
    header("location:index.php");
}
/*
 * 1. Montar objeto que será atualizado
 * 2. Enviar para o método alterar na dao
 */

require "../../modelo/Aluno.class.php";
require "../../dao/AlunoDAO.class.php";

$obj = new Aluno();
$obj->matricula = $_POST["txtMatricula"];
$obj->nome = $_POST["txtNome"];
$obj->disciplinas = $_POST["txtNumDisciplinas"];
if(isset($_POST["rdAtivo"]))
{
    $obj->ativo = "t";
}
else
{
    $obj->ativo = "f";
}

$dao = new AlunoDAO();

$retorno = $dao->alterar($obj);
if($retorno > 0){
    $msg = "Registro alterado com sucesso";
}
else{
    $msg = "Não foi possível alterar o registro";
}

include "../cabecalho.php";
?>
        <div>
            <h1 class="centro">Alteração de Alunos</h1>
            <div>
                <h3><?php echo $msg; ?></h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>

