<?php
    if(!isset($_GET["codigo"]))
    {
        header("location:index.php");
    }

    $codigo = $_GET["codigo"];
    
    require '../../dao/CursoDAO.class.php';
    
    $dao = new CursoDAO();
    
    $retorno = $dao->excluir($codigo);
    
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
            <h1 class="centro">Exclusão de Cursos</h1>
            <div>
                <h3><?php echo $msg; ?></h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>

