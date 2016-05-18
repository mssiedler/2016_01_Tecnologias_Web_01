<?php
     if(!isset($_GET["codigo"]))
    {
      header("location: index.php");
    }
    
    require '../../modelo/Disciplina.class.php';
    require '../../dao/DisciplinaDAO.class.php';
    
    $codigo = $_GET["codigo"];
    $dao = new DisciplinaDAO();
    $obj = $dao->buscarPorChavePrimaria($codigo);

    if($obj == null)
    {
        header("location: index.php");
    } 
    
    include "../cabecalho.php";
 require '../../dao/CursoDAO.class.php';
    require '../../dao/ProfessorDAO.class.php';
    
    $cursoDAO = new CursoDAO();
    $profDAO = new ProfessorDAO();
    
    $cursoLista = $cursoDAO->listar();
    $profLista = $profDAO->listar();
?>
        <div>
            <h1 class="centro">Alteração de Disciplinas</h1>
            <div>
                <form action="upd-ok.php" method="post">
                    <label>Código:</label><input type="text" value="<?php echo $obj->codigo?>" name="txtCodigo"/><br />
                    <label>Nome:</label><input type="text" name="txtNome" value="<?php echo $obj->nome?>"/><br />
                    <label>Semestre:</label><input type="text" name="txtSemestre" value="<?php echo $obj->semestre?>"/><br />
                    <label>Curso:</label>
                    <select name="selCurso">
                        <option value="">Selecione</option>
                        <?php
                        foreach ($cursoLista as $item) {
                            if($obj->curso->codigo == $item->codigo)
                            {
                                $marcado = "selected";
                            }
                            else
                            {
                                 $marcado = "";
                            }
                        ?>
                        <option value="<?php echo $item->codigo?>"  <?php echo $marcado?>>
                            <?php echo $item->nome?></option>
                        <?php
                           
                        }
                        
                        ?>
                    </select><br/>
                    <label>Professor:</label>
                    <select name="selProfessor">
                        <option value="">Selecione</option>
                        <?php
                        foreach ($profLista as $item) {
                             if($obj->professor->siape == $item->siape)
                            {
                                $marcado = "selected";
                            }
                            else
                            {
                                 $marcado = "";
                            }
                        ?>
                        <option value="<?php echo $item->siape?>" <?php echo $marcado?>>
                            <?php echo $item->nome?></option>
                        <?php
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

