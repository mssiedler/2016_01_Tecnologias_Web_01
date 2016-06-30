<?php
    include "../cabecalho.php";
    
    
    
    $dao = new CursoDAO();
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
        <h1 class="centro">Cursos</h1>
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
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                    <?php
                    foreach ($lista as $obj){
                    ?>
                    <tr>
                        <td><?php echo $obj->codigo ?></td>
                        <td><?php echo $obj->nome ?></td>
                        <td>
                            <a href="upd.php?codigo=<?php echo $obj->codigo?>">Editar</a>
                            <a href="del-ok.php?codigo=<?php echo $obj->codigo?>">Excluir</a>
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

