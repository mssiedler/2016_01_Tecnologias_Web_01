<?php
    include "../cabecalho.php";
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
                        <tr>
                            <td>1</td>
                            <td>xxxxxx</td>
                            <td>99</td>
                            <td>SIM</td>
                            <td><a href="upd.php">Editar</a>
                                <a href="del-ok.php?matricula=1">Excluir</a>
                            </td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>xxxxxx</td>
                            <td>99</td>
                            <td>SIM</td>
                             <td><a href="upd.php">Editar</a>
                                <a href="del-ok.php?matricula=2">Excluir</a>
                            </td>

                        </tr>
                        <tr>
                            <td>3</td>
                            <td>xxxxxx</td>
                            <td>99</td>
                            <td>SIM</td>
                             <td><a href="upd.php">Editar</a>
                                <a href="del-ok.php?matricula=3">Excluir</a>
                            </td>

                        </tr>
                    </table>

              
            </div>
        </div>
    </body>
</html>

