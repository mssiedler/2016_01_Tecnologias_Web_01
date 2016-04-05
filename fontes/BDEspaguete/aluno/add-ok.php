<?php
    include "../cabecalho.php";
    
    $nome = $_POST["txtNome"];
    $matricula = $_POST["txtMatricula"];
    $num_disciplinas = $_POST["txtNumDisciplinas"];
  
    if(isset($_POST["rdAtivo"]))
    {
        $situacao = "1";
    }
    else{
        $situacao = "0";
    }
    
    
    $aluno = pg_query("insert into aluno (matricula, ativo, disciplinas, nome) "
            . "values ('$matricula','$situacao','$num_disciplinas','$nome')");
    
?>
        <div>
            <h1 class="centro">Cadastro de Alunos</h1>
            <div>
                <h3>Registro inserido com sucesso</h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>