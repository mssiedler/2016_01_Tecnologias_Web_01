<?php
   include "../cabecalho.php";
   
   require '../../dao/DisciplinaDAO.class.php';
   require '../../modelo/Disciplina.class.php';
   
   $disciplina = new Disciplina();
   
   $disciplina->codigo = $_POST["txtCodigo"];
   $disciplina->nome = $_POST["txtNome"];
   $disciplina->semestre = $_POST["txtSemestre"];
   $disciplina->codigocurso = $_POST["txtCodigoCurso"];
   $disciplina->siapeprofessor = $_POST["txtSiapeProfessor"];
   
   $dao = new DisciplinaDAO();
   $retorno = $dao ->inserir($disciplina);
   
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