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
        $alunos[0] = array("nome"=>"Marcelo", 
            "matr" =>1234, "aprovado"=>false);
        $alunos[1] = array("nome"=>"Luciano", 
            "matr" =>12345, "aprovado"=>false);
        
        
        $aluno = array("nome"=>"Marcelo", 
            "matr" =>1234, "aprovado"=>false);

        foreach ($aluno as $chave => $valor) {
            echo $valor . "<br/>";
         }


        //echo $arr["foo"]; // bar
        //echo $arr[12];    // 1
        //percorrendo

        //foreach ($arr as $chave => $valor) {
        //    echo($chave . "->". $valor);
        //}
        ?>


    </body>
</html>
