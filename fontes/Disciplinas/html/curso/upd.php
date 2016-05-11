<?php
   if(!isset($_GET["codigo"]))
    {
      header("location: index.php");
    }
    
    require '../../modelo/Curso.class.php';
    require '../../dao/CursoDAO.class.php';
    
    $codigo = $_GET["codigo"];
    $dao = new CursoDAO();
    $obj = $dao->buscarPorChavePrimaria($codigo);

    if($obj == null)
    {
        header("location: index.php");
    } 
    
    include "../cabecalho.php";
?>
        <div>
            <h1 class="centro">Alteração de Cursos</h1>
            <div>
                <form action="upd-ok.php" method="post">
                    <label>Código:</label><input type="text" value="<?php echo $obj->codigo ?>" readonly name="txtCodigo"/><br />
                    <label>Nome:</label><input type="text" value="<?php echo $obj->nome ?>"  name="txtNome"/><br />
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>
    </body>
</html>

