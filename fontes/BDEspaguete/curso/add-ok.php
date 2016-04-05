<?php
    include "../cabecalho.php";
    
    $nome = $_POST["txtNome"];
   
    $aluno = pg_query("insert into curso (nome) "
            . "values ('$nome')");
    
?>
        <div>
            <h1 class="centro">Cadastro de Cursos</h1>
            <div>
                <h3>Registro inserido com sucesso</h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>