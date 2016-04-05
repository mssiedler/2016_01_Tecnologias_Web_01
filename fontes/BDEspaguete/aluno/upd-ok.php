<?php
    
    $nome = $_POST["txtNome"];
    $matricula = $_POST["txtMatricula"];
    $num_disciplinas = $_POST["txtNumDisciplinas"];
    if(isset($_POST["rdAtivo"]))
    {
        $situacao = "1";
    }
    else
    {
        $situacao = "0";
    }
    
    
    include "../cabecalho.php";
    
    $sql = "UPDATE aluno SET nome='$nome', disciplinas='$num_disciplinas', ativo='$situacao'"
        . " WHERE matricula='$matricula'";
    
    echo $sql;
    $msg = "";
    
    $retorno = pg_query($sql);
    if($retorno)
    {
        $msg = "Registro alterado com sucesso";
    }
    else
    {
        $msg = "Não foi possível alterar o registro";
    }
    
?>
        <div>
            <h1 class="centro">Alteração de Alunos</h1>
            <div>
                <h3><?php echo $msg?></h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>

