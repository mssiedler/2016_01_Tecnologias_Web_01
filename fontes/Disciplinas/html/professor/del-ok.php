<?php
    if(!isset($_GET["siape"]))
    {
        header("location:index.php");
    }

    $siape = $_GET["siape"];
    
    require '../../dao/ProfessorDAO.class.php';
    
    $dao = new ProfessorDAO();
    
    $retorno = $dao->excluir($siape);
    
    if($retorno > 0)
    {
        $msg = "Registro excluído com sucesso";
    }
    else
    {
        $msg = "Não foi possível excluir o registro. Verifique dependências";
    }

    include "../cabecalho.php";
?>
        <div>
            <h1 class="centro">Exclusão de Professores</h1>
            <div>
                <h3><?php echo $msg; ?></h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>

