<?php
    include "../cabecalho.php";
?>
        
        
        <div>
            <h1 class="centro">Cadastro de Alunos</h1>

            <div>

                <form action="add-ok.php" method="post">
                    <label>Nome:</label><input type="text" name="txtNome" /><br />
                    <label>Matrícula</label><input type="text" name="txtMatricula" 
                                                   /><br />
                    <label>Num. Disciplinas</label><input type="text" name="txtDisciplinas" /><br />
                    <label>Ativo</label><input type="checkbox" name="chkAtivo" /><br />
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>



    </body>
</html>

</body>
</html>
