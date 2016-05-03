<?php
    //se não veio o id volta pra lista(index)
    if(!isset($_GET["id"]))
    {
        header("location: index.php");
    }
    
    require '../../modelo/Usuario.class.php';
    require '../../dao/UsuarioDAO.class.php';
    
    $id = $_GET["id"];
    $dao = new UsuarioDAO();
    $obj = $dao->buscarPorChavePrimaria($id);
    //se o aluno nao for encontrado, volta pra index
    if($obj == null)
    {
        header("location: index.php");
    }
    
    

    include "../cabecalho.php";
    
?>
        
        
        
        <div>
            <h1 class="centro">Alteração de Usuarios</h1>

            <div>

                 <form action="upd-ok.php" method="post">
                     <label>ID:</label><input type="text" name="txtId" readonly  value="<?php echo $obj->id?>"/><br />
                    
                     <label>Login:</label><input type="text" name="txtLogin" value="<?php echo $obj->login?>"/><br />
                    <label>Senha:</label><input type="text" name="txtSenha" value="<?php echo $obj->senha?>"
                     <label>Email:</label><input type="text" name="txtEmail" value="<?php echo $obj->email?>" /><br />
                                                  <br />
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>



    </body>
</html>

</body>
</html>
