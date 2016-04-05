<?php
    include "../cabecalho.php";
    
    $codigo = $_POST["txtCodigo"];
    $nome = $_POST["txtNome"];
    $semestre = $_POST["txtSemestre"];
    $codigoCurso = $_POST["txtCodigoCurso"];
    $siapeProfessor = $_POST["txtSiapeProfessor"];
   
    $aluno = pg_query("insert into disciplina (codigo, nome, semestre, codigocurso, siapeprofessor) "
            . "values ('$codigo','$nome','$semestre','$codigoCurso','$siapeProfessor')");
    
?>
        <div>
            <h1 class="centro">Cadastro de Disciplinas</h1>
            <div>
                <h3>Registro inserido com sucesso</h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>