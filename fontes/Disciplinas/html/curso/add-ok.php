<?php
    include "../cabecalho.php";
    
   require '../../dao/CursoDAO.class.php';
   require '../../modelo/Curso.class.php';
   
   $curso = new Curso();
   
   $curso->nome = $_POST["txtNome"];
 
   $dao = new CursoDAO();
   $retorno = $dao ->inserir($curso);
   
?>
        <div>
            <h1 class="centro">Cadastro de Cursos</h1>
            <div>
                <h3>Registro inserido com sucesso</h3>
                <div>
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </div>
    </body>
</html>