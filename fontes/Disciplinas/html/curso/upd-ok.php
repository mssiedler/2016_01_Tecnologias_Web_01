<?php
if(!isset($_POST["txtCodigo"]) || !isset($_POST["txtNome"]))
{
    header("location:index.php");
}

require "../../modelo/Curso.class.php";
require "../../dao/CursoDAO.class.php";

$obj = new Curso();
$obj->codigo = $_POST["txtCodigo"];
$obj->nome = $_POST["txtNome"];

$dao = new CursoDAO();

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
            <h1 class="centro">Alteração de Cursos</h1>
            <div>
                <h3><?php echo $msg; ?></h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>

