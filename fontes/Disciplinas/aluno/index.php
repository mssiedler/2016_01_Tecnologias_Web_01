<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gerenciamento de Disciplinas</title>
        <link rel="stylesheet" href="../estilo.css" />
    </head>
    <body>
        <h1>Sistema de Controle de Disciplinas</h1>
        <header class="centro">Usuário: xxxxx - <a href="#">Sair</a>
            <hr />
            <nav><a href="../aluno">Aluno</a> - <a href="../professor">Professores</a> - <a href="../disciplina">Disciplina</a></nav>
        </header>


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
                                <a href="del-ok.php">Excluir</a>
                            </td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>xxxxxx</td>
                            <td>99</td>
                            <td>SIM</td>
                             <td><a href="upd.php">Editar</a>
                                <a href="del-ok.php">Excluir</a>
                            </td>

                        </tr>
                        <tr>
                            <td>3</td>
                            <td>xxxxxx</td>
                            <td>99</td>
                            <td>SIM</td>
                             <td><a href="upd.php">Editar</a>
                                <a href="del-ok.php">Excluir</a>
                            </td>

                        </tr>
                    </table>

              
            </div>
        </div>
    </body>
</html>

