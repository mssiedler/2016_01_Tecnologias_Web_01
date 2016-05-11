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
?>
        <div>
            <h1 class="centro">Alteração de Disciplinas</h1>
            <div>
                <form action="upd-ok.php" method="post">
                    <label>Código:</label><input type="text" value="<?php echo $obj->codigo ?>" readonly name="txtCodigo"/><br />
                    <label>Nome:</label><input type="text" value="<?php echo $obj->nome ?>" name="txtNome"/><br />
                    <label>Semestre:</label><input type="text" value="<?php echo $obj->semestre ?>" name="txtSemestre"/><br />
                    <label>Código do curso:</label><input type="text" value="<?php echo $obj->codigocurso ?>" name="txtCodigoCurso"/><br />
                    <label>Siape do professor:</label><input type="text" value="<?php echo $obj->siapeprofessor ?>" name="txtSiapeProfessor"/><br />
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>
    </body>
</html>

