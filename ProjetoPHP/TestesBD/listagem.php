<!DOCTYPE html>
<?php
pg_connect("host=localhost user=postgres password=postgres 
    dbname=ifsul port=5432");
//monta o comando de acesso a base de dados
//resultado da consulta é atribuído a variável listagem
$listagem = pg_query("select * from curso");

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        $i = 0;
        while ($linha = pg_fetch_assoc($listagem)) {
        
        echo "$"."listagem[$i]['codigo']=".$linha["codigo"]."<br/>";
         echo "$"."listagem[$i]['nome']=".$linha["nome"]."<br/>";
         $i++;
        }
        ?>
    </body>
</html>
