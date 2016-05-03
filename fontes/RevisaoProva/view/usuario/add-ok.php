<?php
include "../config.php";
include "../cabecalho.php";
    
require '../../dao/UsuarioDAO.class.php';
require '../../modelo/Usuario.class.php';

$obj = new Usuario();

$obj->login = $_POST["txtLogin"];
$obj->senha = $_POST["txtSenha"];
$obj->email = $_POST["txtEmail"];

$dao = new UsuarioDAO();

$retorno = $dao->inserir($obj);
if($retorno > 0 )
{
    $msg = "Registro inserido com sucesso";
}
else
{
   $msg = "Errrouuu ao inserir, tente novamente"; 
}






    
    ?>
        
        
        
        <div>
            <h1 class="centro">Cadastro de Alunos</h1>

            <div>

                <h3><?php echo $msg?></h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>



    </body>
</html>

</body>
</html>
