<?php
    include "../cabecalho.php";
    $pdao = new ProfessorDAO();
    
    $listaprofs = $pdao->listar();
    
?>
        <div>
            <h1 class="centro">Cadastro de Cursos</h1>
            <div>
                <form action="add-ok.php" method="post">
                    <label>Nome:</label><input type="text" name="txtNome"/><br />
                    <label>Professores:</label><br/>
                    <?php
                    foreach ($listaprofs as $prof) {
                    
                    ?>
                    <input type="checkbox" name="professores[]" value="<?php echo $prof->siape?>">
                    <?php echo $prof->nome?><br/>
                    
                    <?php
                    }
                    ?>
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>
    </body>
</html>

