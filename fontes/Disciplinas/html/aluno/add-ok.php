<?php
   include "../cabecalho.php";
   
   require '../../dao/AlunoDAO.class.php';
   require '../../modelo/Aluno.class.php';
   
   //montar o objeto Aluno
   $aluno = new Aluno();
   
   //pego os campos do formulário e preencho a classe
   $aluno->nome = $_POST["txtNome"];
   $aluno->matricula = $_POST["txtMatricula"];
   $aluno->disciplinas = $_POST["txtNumDisciplinas"];
   //$aluno->ativo = isset($_POST["rdAtivo"]);
   if(isset($_POST["rdAtivo"]))
       $aluno->ativo = "t";
   else
       $aluno->ativo = "f";
   
   //Chamo o DAO e mando inserir
   $dao = new AlunoDAO();
   $retorno = $dao ->inserir($aluno);
   
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