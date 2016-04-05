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
        while ($linha = pg_fetch_assoc($listagem)) {
?>
        <p><?php echo $linha["nome"]?> - 
            <?php echo $linha["codigo"]?></p>    
        <hr/>
        
        <?php
        }
        ?>
    </body>
</html>
