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
        // Array em PHP é determinado pela combinação de chave/valor
        //a chave pode ser INTEIRO ou STRING
        
        ?>
        
        <?php
        
        //EXEMPLO 1 - MESES DO ANO
        
	// Cria um array dos meses.
	// Cria um array com os meses. Notar a vírgula antes do mês de janeiro. Isto é necessário //porque não existe mês representado pelo número 
	$arrMes = array("","Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
	 
	// Chama o array com o número do mês - escreve no navegador do usuário
       
	
	?>
        
        
        
        <?php
        //EXEMPLO 2 - criando o array dinâmicamente
        $celulares[0] = "ZenFone";
        $celulares[1] = "IPHONE";
        
        $celulares[2] = "XIMXIM";
        
        //echo $celulares[1];
        
        
        ?>
        
        <?php
        //EXEMPLO 3 - função explode
        
       $listadefrutas = "maçãs, peras, bananas, laranjas, limões";
	 
	$arrFrutas = explode(",", $listadefrutas);
        
        //echo count($arrFrutas);
        
        ?>
        
        <?php
	//escrevendo um array na tela
        
        //print_r($arrFrutas);
        
        //var_dump($arrFrutas);
        
        //tamanho do array
        
        //echo count($arrFrutas)
	?>
        
        <?php
        //percorrer o array
        for($i=0;$i<count($arrFrutas);$i++)
        {
           //echo $arrFrutas[$i] . "<br />"; 
            
        }
        
        foreach ($arrFrutas as $fruta)
        {
            echo $fruta . "<br />";
        }
        
        ?>
        
        
        
        
       
    </body>
</html>
