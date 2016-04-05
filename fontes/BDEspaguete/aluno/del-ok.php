<?php
 

 
    include "../cabecalho.php";
    //PEGA A MATRÍCULA QUE VEM VIA GET
    $matricula= $_GET["matricula"];
    //VARIÁVEL SQL - MONTA O COMANDO SQL QUE "SERÁ" EXECUTADO
    $sql = "DELETE FROM aluno WHERE matricula='$matricula'" ;
    echo $sql;
    //EXECUTA A AÇÃO NO BANCO
    $retorno = pg_query($sql);
    if($retorno==true)
    {
        echo "OKKKK";
        
    }
    else
    {
        echo "NAO DEU";
        
    }
     
?>
        <div>
            <h1 class="centro">Exclusão de Alunos</h1>
            <div>
                <h3>Registro excluído com sucesso</h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>

