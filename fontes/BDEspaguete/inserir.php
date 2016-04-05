
<?php
pg_connect("host=localhost user=postgres password=postgres 
    dbname=ifsul port=5432");
//monta o comando de acesso a base de dados
$nome = "Enfermagem";

$sql =  "insert into curso (nome) values ('$nome')";

echo $sql;

$resultado = pg_query($sql);
if($resultado==true)
{
    $mensagem = "Cadastro OK";
}
else
{
   $mensagem = "Cadastro ERRO";  
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $mensagem;
        ?>
    </body>
</html>
