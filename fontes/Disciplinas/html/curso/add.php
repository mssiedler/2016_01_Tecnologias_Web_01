<?php
    include "../cabecalho.php";
?>
        <div>
            <h1 class="centro">Cadastro de Cursos</h1>
            <div>
                <form action="add-ok.php" method="post">
                    <label>Nome:</label><input type="text" name="txtNome"/><br />
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>
    </body>
</html>

