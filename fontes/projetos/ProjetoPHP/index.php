<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // atribuição de valores as variáveis
        $projetor = "Epson";
        $estado = "regular";
        $preco = 1500.0;
        //escrevo na tela
        //echo "<h3>" . $projetor . " " . $estado . "</h3>";
        
        ?>
        <h3>Projetor </h3>
        <ul>
            <li>Modelo:<?=$projetor?></li>
            <li>Estado:<?php echo $estado?></li>
            <li>Preço:<?php echo $preco?></li>
        </ul>
    </body>
</html>
