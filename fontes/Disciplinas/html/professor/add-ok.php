<?php
    include "../cabecalho.php";
    
   require '../../dao/ProfessorDAO.class.php';
   require '../../modelo/Professor.class.php';
   
   $professor = new Professor();
   
   $professor->siape = $_POST["txtSiape"];
   $professor->nome = $_POST["txtNome"];
   
   $dao = new ProfessorDAO();
   $retorno = $dao ->inserir($professor);
   
?>
        <div>
            <h1 class="centro">Cadastro de Professores</h1>
            <div>
                <h3>Registro inserido com sucesso</h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>