<?php
    include "../config.php";
    //verificar se veio os campos obrigatórios
    if(!isset($_POST["txtId"]) || !isset($_POST["txtLogin"]))
    {
        header("location:index.php");
    }
    /*
     *    1. montar  objeto que será atualizado
     *    2. enviar para o método alterar na dao
     */

    require "../../modelo/Usuario.class.php";
    require "../../dao/UsuarioDAO.class.php";

    $obj = new Usuario();
    $obj->id = $_POST["txtId"];
    $obj->login = $_POST["txtLogin"];
    $obj->senha = $_POST["txtSenha"];
    $obj->email = $_POST["txtEmail"];
    
    
    $dao = new UsuarioDAO();
   
    $retorno = $dao->atualizar($obj);
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
            <h1 class="centro">Alteração de Usuários</h1>

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
