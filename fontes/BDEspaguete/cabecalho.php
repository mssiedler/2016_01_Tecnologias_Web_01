<!DOCTYPE html>
<?php
pg_connect("host=localhost user=postgres password=postgres 
    dbname=ifsul port=5432");
?>
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
            <nav>
                <a href="../curso">Curso</a> - <a href="../aluno">Aluno</a> - <a href="../professor">Professores</a> - <a href="../disciplina">Disciplina</a></nav>
        </header>