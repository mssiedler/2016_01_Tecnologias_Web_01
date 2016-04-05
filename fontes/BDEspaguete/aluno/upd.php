<?php
    include "../cabecalho.php";
    //pega a chave primária que foi enviada por get
    $matricula = $_GET["matricula"];
    //montar o sql que me retorna o registro 
    //cuja matrícula é a informada
    $sql = "SELECT * FROM aluno WHERE matricula='$matricula'";
    //EXECUTOU a CONSULTA NO BD
    $alunoRes = pg_query($sql);
    //Pega o resultado da consulta e converte para a 
    //estrura de dados desejada, no caso array associativo
    $aluno = pg_fetch_assoc($alunoRes);
    //atribuição do que veio do BD para as
    //variáveis
    $nome = $aluno["nome"];
    $disciplinas = $aluno["disciplinas"];
    if($aluno["ativo"] == "t")
    {
        $ativo = "checked";
    }
    else
    {
        $ativo = "";
    }
    
    
?>   <div>
            <h1 class="centro">Alteração de Alunos</h1>
            <div>
                <form action="upd-ok.php" method="post">
                    <label>Matrícula</label><input type="text" value="<?php echo $matricula?>" readonly name="txtMatricula"/><br />
                    
                    <label>Nome:</label><input type="text" value="<?php echo $nome?>"  name="txtNome"/><br />
                    <label>Num. Disciplinas</label><input type="text" value="<?php echo $disciplinas?>" name="txtNumDisciplinas" /><br />
                    <label>Ativo</label><input type="checkbox" name="rdAtivo" <?php echo $ativo?> /><br />
                 
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>
    </body>
</html>

