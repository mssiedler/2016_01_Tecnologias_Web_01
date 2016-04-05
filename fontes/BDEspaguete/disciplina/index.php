<?php
    include "../cabecalho.php";
    
    $lista_disciplinas = pg_query("select * from disciplina");
?>
    <div>
        <h1 class="centro">Disciplinas</h1>
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
                        <th>Semestre</th>
                        <th>Código do curso</th>
                        <th>SIAPE do professor</th>
                        <th>Ações</th>
                    </tr>
                    <?php
                    while ($linha = pg_fetch_assoc($lista_disciplinas)) {
                    ?>
                    <tr>
                        <td><?php echo $linha["codigo"]?></td>
                        <td><?php echo $linha["nome"]?></td>
                        <td><?php echo $linha["semestre"]?></td>
                        <td><?php echo $linha["codigocurso"]?></td>
                        <td><?php echo $linha["siapeprofessor"]?></td>
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

