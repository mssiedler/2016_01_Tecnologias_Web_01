<?php
pg_connect("host=localhost user=postgres password=postgres 
    dbname=ifsul port=5432");

$identificador = 5;
$nome = 'Agroindústria';
$resultado = pg_query("update curso set nome='$nome' where codigo= '$identificador'");
if($resultado==true)
{
    $mensagem = "ATUALIZAÇÃO OK";
}
else
{
   $mensagem = "ATUALIZAÇÃO ERRO";  
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $mensagem;
        ?>
    </body>
</html>
