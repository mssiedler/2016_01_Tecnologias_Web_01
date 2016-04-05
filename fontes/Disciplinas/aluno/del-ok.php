<?php

if(!isset($_GET["matricula"]))
{
    header("location:index.php");
}

$matricula = $_GET["matricula"];
echo $matricula;


include "../cabecalho.php";
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

</body>
</html>
