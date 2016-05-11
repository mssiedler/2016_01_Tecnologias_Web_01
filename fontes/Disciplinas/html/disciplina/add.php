<?php
    include "../cabecalho.php";
?>
        <div>
            <h1 class="centro">Cadastro de Disciplinas</h1>
            <div>
                <form action="add-ok.php" method="post">
                    <label>Código:</label><input type="text" name="txtCodigo"/><br />
                    <label>Nome:</label><input type="text" name="txtNome"/><br />
                    <label>Semestre:</label><input type="text" name="txtSemestre"/><br />
                    <label>Código do curso:</label><input type="text" name="txtCodigoCurso"/><br />
                    <label>Siape do professor:</label><input type="text" name="txtSiapeProfessor"/><br />
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>
    </body>
</html>

