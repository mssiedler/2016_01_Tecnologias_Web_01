<?php
    if(!isset($_GET["siape"]))
    {
        header("location: index.php");
    }
    
    require '../../modelo/Professor.class.php';
    require '../../dao/ProfessorDAO.class.php';
    
    $siape = $_GET["siape"];
    $dao = new ProfessorDAO();
    $obj = $dao->buscarPorChavePrimaria($siape);

    if($obj == null)
    {
        header("location: index.php");
    }
    
    include "../cabecalho.php";
?>
        <div>
            <h1 class="centro">Alteração de Professores</h1>
            <div>
                <form action="upd-ok.php" method="post">
                    <label>Siape:</label><input type="text" value="<?php echo $obj->siape ?>" readonly name="txtSiape"/><br />
                    <label>Nome:</label><input type="text" value="<?php echo $obj->nome ?>" name="txtNome" /><br />
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>
    </body>
</html>

