<?php
    //verificar se veio os campos obrigatórios
    if(!isset($_POST["txtMatricula"]) || !isset($_POST["txtNome"]))
    {
        header("location:index.php");
    }
    /*
     *    1. montar  objeto que será atualizado
     *    2. enviar para o método alterar na dao
     */

    require "../../modelo/Aluno.class.php";
    require "../../dao/AlunoDAO.class.php";

    $obj = new Aluno();
    $obj->matricula = $_POST["txtMatricula"];
    $obj->nome = $_POST["txtNome"];
    $obj->disciplinas = $_POST["txtDisciplinas"];
    if(isset($_POST["ativo"]))
    {
        $obj->ativo = "t";
    }
    else
    {
        $obj->ativo = "f";
    }
    
    $dao = new AlunoDAO();
   
    $retorno = $dao->alterar($obj);
    $msg= "";
    if($retorno > 0){
        $msg = "Registro alterado com sucesso";
    }
    else{
        $msg = "Não foi possível alterar o registro";
    }
    
    
    include "../cabecalho.php";
?>
        
        
        
        <div>
            <h1 class="centro">Alteração de Alunos</h1>

            <div>

                <h3><?php  echo $msg;?></h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>



    </body>
</html>

</body>
</html>
