<?php
    //se não veio a matrícula volta pra lista(index)
    if(!isset($_GET["matricula"]))
    {
        header("location: index.php");
    }
    
    require '../../modelo/Aluno.class.php';
    require '../../dao/AlunoDAO.class.php';
    
    $matricula = $_GET["matricula"];
    $dao = new AlunoDAO();
    $obj = $dao->buscarPorChavePrimaria($matricula);
    //se o aluno nao for encontrado, volta pra index
    if($obj == null)
    {
        header("location: index.php");
    }
    
    if($obj->ativo)
    {
        $checked= "checked";
    }
    else
    {
        $checked= "";
    }

    include "../cabecalho.php";
    
?>
        
        
        
        <div>
            <h1 class="centro">Alteração de Alunos</h1>

            <div>

                <form action="upd-ok.php" method="post">
                    <label>Matrícula</label><input type="text" readonly
                                                   value="<?php echo $obj->matricula?>"/><br />
                    <label>Nome:</label><input type="text" value="<?php echo $obj->nome?>"  /><br />
                    
                    <label>Num. Disciplinas</label><input type="text" value="<?php echo $obj->disciplinas?>" /><br />
                    <label>Ativo</label><input type="checkbox" <?php echo $checked?>/><br />
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>



    </body>
</html>

</body>
</html>
