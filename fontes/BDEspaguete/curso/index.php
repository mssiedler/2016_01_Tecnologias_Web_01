<?php
    include "../cabecalho.php";
    
    $lista_cursos = pg_query("select * from curso");
?>
    <div>
        <h1 class="centro">Cursos</h1>
            <div>
                +<a href="add.php">Novo</a>
                <div>
                    <form>
                        <input type="text" />
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
                    while ($linha = pg_fetch_assoc($lista_cursos)) {
                    ?>
                    <tr>
                        <td><?php echo $linha["codigo"]?></td>
                        <td><?php echo $linha["nome"]?></td>
                        <td>
                            <a href="upd.php">Editar</a>
                            <a href="del-ok.php">Excluir</a>
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

