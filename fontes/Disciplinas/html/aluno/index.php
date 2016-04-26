<?php
    include "../config.php";

    include "../cabecalho.php";
    
    require '../../dao/AlunoDAO.class.php';
    
     $dao = new AlunoDAO();
     if(isset($_POST["txtFiltro"]) && $_POST["txtFiltro"]!="")
     {
        $lista = $dao->listar($_POST["txtFiltro"]); 
     }
     else
     {
         $lista = $dao->listar(); 
     }
     
     
     
?>


        <div>
            <h1 class="centro">Alunos</h1>

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
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Disciplinas</th>
                            <th>Matriculado</th>
                            <th>Ações</th>
                        </tr>
                        <?php
                        foreach ($lista as $obj) {
                        ?>
                        <tr>
                            <td><?php echo $obj->matricula?></td>
                            <td><?php echo $obj->nome?></td>
                            <td><?php echo $obj->disciplinas?></td>
                            <td><?php echo $obj->ativo?></td>
                            <td><a href="upd.php?matricula=<?php echo $obj->matricula?>">Editar</a>
                                <a href="del-ok.php?matricula=<?php echo $obj->matricula?>">Excluir</a>
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

