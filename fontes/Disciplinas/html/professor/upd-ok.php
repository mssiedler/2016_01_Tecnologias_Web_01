<?php
    $nome = $_POST["txtNome"];
    $siape = $_POST["txtSiape"];
    
    echo $nome . "<br />" . $siape;

    include "../cabecalho.php";
?>
        <div>
            <h1 class="centro">Alteração de Professores</h1>
            <div>
                <h3>Registro alterado com sucesso</h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>

