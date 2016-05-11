<?php
    if(!isset($_POST["txtCodigo"]) || !isset($_POST["txtNome"]))
    {
        header("location:index.php");
    }
  

    require "../../modelo/Disciplina.class.php";
    require "../../dao/DisciplinaDAO.class.php";

    $obj = new Disciplina();
    $obj->codigo = $_POST["txtCodigo"];
    $obj->nome = $_POST["txtNome"];
    $obj->semestre = $_POST["txtSemestre"];
    $obj->codigocurso = $_POST["txtCodigoCurso"];
    $obj->siapeprofessor = $_POST["txtSiapeProfessor"];
    
    $dao = new DisciplinaDAO();

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
            <h1 class="centro">Alteração de Disciplinas</h1>
            <div>
                <h3><?php echo $msg; ?></h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>

