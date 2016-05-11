<?php
    include "../cabecalho.php";
?>
        <div>
            <h1 class="centro">Cadastro de Professores</h1>
            <div>
                <form action="add-ok.php" method="post">
                    <label>SIAPE:</label><input type="text" name="txtSiape"/><br />
                    <label>Nome:</label><input type="text" name="txtNome"/><br />
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>
    </body>
</html>

