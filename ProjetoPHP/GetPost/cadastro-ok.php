<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if(isset($_POST["txtNome"]) && isset($_POST["txtCpf"])){
    $nome = $_POST["txtNome"];
    $cpf = $_POST["txtCpf"];
}


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Nome: <?php echo $nome?><br/>
        endeeço: <br/>
    </body>
</html>
