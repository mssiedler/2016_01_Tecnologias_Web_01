<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$mensagem = "";
error_reporting(0);
if(isset($_POST["txtAluno"]) && isset($_POST["selHeroi"]))
{
    pg_connect("host=postgresql.db4.net2.com.br user=programatche6 password=postgres 
    dbname=programatche6 port=5432");
    
    //pg_connect("host=localhost user=postgres password=postgres 
    //dbname=votacao port=5432");
//monta o comando de acesso a base de dados
$aluno = $_POST["txtAluno"];
$heroi = $_POST["selHeroi"];
$ip = $_POST["txtVotante"];
$resultado = pg_query("INSERT INTO voto(
            ip, heroi, aluno)
    VALUES ('$ip', '$heroi', '$aluno')");
if($resultado==true)
{
    $mensagem = "Voto OK";
}
else
{
   $mensagem = "Você já votou nesse herói.";  
}
    
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo $mensagem?>
        <form action="index.php" method="post">
            meu nome:<input type="text" name="txtVotante" required/><br />
            <select name="selHeroi" required>
                <option value="dead">Deadpool</option>
                <option value="xavier">Xavier</option>
                <option value="magneto">Magneto</option>
                <option value="mistica">Mistica</option>
                <option value="wolve">Wolverine</option>
               
                <!--
                <option value="demolidor">Demolidor</option>
                <option value="jessica">Jessica Jones</option>
                <option value="flash">Flash</option>
                <option value="arrow">Arrow</option>
                -->
            </select><br/>
            candidato:<input type="text" name="txtAluno" required/>
            <br/>
            <input type="submit" value="votar" />
            
            
        </form>
    </body>
</html>
