<?php

if(!isset($_GET["id"]))
{
    header("location:index.php");
}

$id = $_GET["id"];

require "../../dao/UsuarioDAO.class.php";

$dao = new UsuarioDAO();

$retorno = $dao->excluir($id);
 
if($retorno > 0)
{
  $msg = "Registro excluído com sucesso" ; 
}
else{
  $msg = "Não foi possível excluir o registro. Verifique dependências";  
}
    


include "../cabecalho.php";
?>
        
        
        
        <div>
            <h1 class="centro">Exclusão de Alunos</h1>

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
