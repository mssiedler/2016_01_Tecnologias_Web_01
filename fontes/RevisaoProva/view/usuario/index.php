<?php
    include "../config.php";

    include "../cabecalho.php";
    
    require '../../dao/UsuarioDAO.class.php';
    
     $dao = new UsuarioDAO();
    
     $lista = $dao->listar(); 
     
     
     
     
?>


        <div>
            <h1 class="centro">Usuários</h1>

            <div>
                +<a href="add.php">Novo</a>
                <div>
                    <form method="post">
                        <input type="text" name="txtFiltro" />
                        <input type="submit" value="Pesquisar"/><br />
                    </form>
                </div>
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Login</th>
                            <th>Email</th>
                            <th>Senha</th>
                            <th>Ações</th>
                        </tr>
                        <?php
                        foreach ($lista as $obj) {
                        ?>
                        <tr>
                            <td><?php echo $obj->id?></td>
                            <td><?php echo $obj->login?></td>
                            <td><?php echo $obj->email?></td>
                            <td><?php echo $obj->senha?></td>
                            <td><a href="upd.php?id=<?php echo $obj->id?>">Editar</a>
                                <a href="del-ok.php?id=<?php echo $obj->id?>">Excluir</a>
                            </td>

                        </tr>
                       <?php
                        }
                        ?>
                    </table>

              
            </div>
        </div>
    </body>
</html>

