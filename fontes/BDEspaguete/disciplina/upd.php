<?php
    include "../cabecalho.php";
?>
        <div>
            <h1 class="centro">Alteração de Alunos</h1>
            <div>
                <form action="upd-ok.php" method="post">
                    <label>Nome:</label><input type="text" value="xxxx"  name="txtNome"/><br />
                    <label>Matrícula</label><input type="text" value="xxxx" name="txtMatricula"/><br />
                    <label>Num. Disciplinas</label><input type="text" value="99" name="txtNumDisciplinas" /><br />
                    <label>Ativo</label><input type="checkbox" name="rdAtivo"/><br />
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>
    </body>
</html>

