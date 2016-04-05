<?php
    include "../cabecalho.php";
    
    $nome_cursos = pg_query("select nome from curso");
    $nome_professores = pg_query("select nome from professor");
?>
        <div>
            <h1 class="centro">Cadastro de Disciplinas</h1>
            <div>
                <form action="add-ok.php" method="post">
                    <label>Código:</label><input type="text" name="txtCodigo"/><br />
                    <label>Nome:</label><input type="text" name="txtNome"/><br />
                    <label>Semestre:</label><input type="text" name="txtSemestre"/><br />
                    <label>Nome do curso:</label>
                    <select id="nome_curso">
                        
			<option>Selecione</option>
                            <?php  while ($linha = pg_fetch_assoc($nome_cursos)) { ?>
                                    <option id="layout1"><?php echo $linha["nome"]; ?></option>
                                    <p name="txtNomeCurso" value="<?php echo $linha["codigo"] ?>" />
                            <?php  } ?>
		    </select><br />
                    <label>SIAPE do professor:</label>
                    <select id="siape_professor">
                        
			<option>Selecione</option>
                            <?php  while ($linha = pg_fetch_assoc($nome_professores)) { ?>
                                    <option id="layout1"><?php echo $linha["nome,siape"]; ?></option>
                            <?php  } ?>
		    </select><br />
                    
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>
    </body>
</html>

