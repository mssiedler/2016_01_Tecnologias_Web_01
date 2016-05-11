<?php
    include "../cabecalho.php";
    
    require '../../dao/ProfessorDAO.class.php';
    
    $dao = new ProfessorDAO();
    $lista = $dao->listar();
    if(isset($_POST["txtFiltro"]))
    {
       $lista = $dao->listar($_POST["txtFiltro"]); 
    }
    else
    {
       $lista = $dao->listar(); 
    }
    
    //var_dump($lista);
?>
    <div>
        <h1 class="centro">Professores</h1>
            <div>
                +<a href="add.php">Novo</a>
                <div>
                    <form method="post">
                        <input type="text" name="txtFiltro"/>
                        <input type="submit" value="Pesquisar"/><br />
                    </form>
                </div>
                <table>
                    <tr>
                        <th>SIAPE</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                    <?php
                    foreach ($lista as $obj){
                    ?>
                    <tr>
                        <td><?php echo $obj->siape ?></td>
                        <td><?php echo $obj->nome ?></td>
                        <td>
                            <a href="upd.php?siape=<?php echo $obj->siape?>">Editar</a>
                            <a href="del-ok.php?siape=<?php echo $obj->siape?>">Excluir</a>
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

