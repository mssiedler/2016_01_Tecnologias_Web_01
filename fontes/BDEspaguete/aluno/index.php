<?php
    include "../cabecalho.php";
    
    $lista_alunos = pg_query("select * from aluno");
?>
    <div>
        <h1 class="centro">Alunos</h1>
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
                        <th>Matrícula</th>
                        <th>Nome</th>
                        <th>Disciplinas</th>
                        <th>Matriculado</th>
                        <th>Ações</th>
                    </tr>
                    <?php
                    while ($linha = pg_fetch_assoc($lista_alunos)) {
                    ?>
                    <tr>
                        <td><?php echo $linha["matricula"]?></td>
                        <td><?php echo $linha["nome"]?></td>
                        <td><?php echo $linha["disciplinas"]?></td>
                        <td><?php if ($linha["ativo"] == 't'){
                                    echo "SIM";
                                 }
                                 else{
                                    echo "NÃO";
                                 }
                            ?></td>
                        <td>
                            <a href="upd.php?matricula=<?php echo $linha["matricula"]?>">Editar</a>
                            <a href="del-ok.php?matricula=<?php echo $linha["matricula"]?>">Excluir</a>
                        </td>
                    </tr> <?php }
                    ?>
                    
                   

                </table>
            </div>
        </div>
    </body>
</html>

