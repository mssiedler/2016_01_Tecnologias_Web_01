<?php
    include "../cabecalho.php";
    require "../../config.php";
    require '../../dao/CursoDAO.class.php';
    require '../../dao/ProfessorDAO.class.php';
    
    $cursoDAO = new CursoDAO();
    $profDAO = new ProfessorDAO();
    
    $cursoLista = $cursoDAO->listar();
    $profLista = $profDAO->listar();
?>
        <div>
            <h1 class="centro">Cadastro de Disciplinas</h1>
            <div>
                <form action="add-ok.php" method="post">
                    <label>Código:</label><input type="text" name="txtCodigo"/><br />
                    <label>Nome:</label><input type="text" name="txtNome"/><br />
                    <label>Semestre:</label><input type="text" name="txtSemestre"/><br />
                    <label>Curso:</label>
                    <select name="selCurso">
                        <option value="">Selecione</option>
                        <?php
                        foreach ($cursoLista as $item) {
                        ?>
                        <option value="<?php echo $item->codigo?>">
                            <?php echo $item->nome?></option>
                        <?
                        }
                        ?>
                    </select><br/>
                    <label>Professor:</label>
                    <select name="selProfessor">
                        <option value="">Selecione</option>
                        <?php
                        foreach ($profLista as $item) {
                        ?>
                        <option value="<?php echo $item->siape?>">
                            <?php echo $item->nome?></option>
                        <?
                        }
                        ?>
                    </select><br />
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>
    </body>
</html>

