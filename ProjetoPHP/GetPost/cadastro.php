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
        <form action="cadastro-ok.php" method="post">
            <label>Nome:</label>
            <input type="text" name="txtNome" />
            <br/>
            <label>Endereço:</label>
            <input type="text" name="txtEndereco" />
            <br/>
            <label>CPF:</label>
            <input type="text" name="txtCpf" />
            <br/>
            <input type="submit" value="Enviar" />
        </form>
        <!--
            Quando for enviado vai assim:
            
            $_GET["txtNome"] = ???
            $_GET["txtEndereco"] = ???
            $_GET["txtCpf"] = ???
        -->
    </body>
</html>
