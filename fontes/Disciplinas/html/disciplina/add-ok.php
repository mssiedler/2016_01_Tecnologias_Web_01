<?php
   include "../cabecalho.php";
   require "../../config.php";
   require_once '../../dao/DisciplinaDAO.class.php';
   require_once '../../modelo/Disciplina.class.php';
   
   $disciplina = new Disciplina();
   
   $disciplina->codigo = $_POST["txtCodigo"];
   $disciplina->nome = $_POST["txtNome"];
   $disciplina->semestre = $_POST["txtSemestre"];
   $disciplina->curso->codigo = $_POST["selCurso"];
   $disciplina->professor->siape = $_POST["selProfessor"];
   
   $dao = new DisciplinaDAO();
   $retorno = $dao ->inserir($disciplina);
   $msg = "";
   if($retorno)
   {
       $msg = "Registro inserido com sucesso";
   }
   else
   {
       $msg = "Erro ao inserir o registro";
   }
   
?>
        <div>
            <h1 class="centro">Cadastro de Disciplinas</h1>
            <div>
                <h3><?php echo $msg?></h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>