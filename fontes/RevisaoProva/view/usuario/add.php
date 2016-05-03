<?php
    include "../cabecalho.php";
?>
        
        
        <div>
            <h1 class="centro">Cadastro de Usuário</h1>

            <div>

                <form action="add-ok.php" method="post">
                    <label>Login:</label><input type="text" name="txtLogin" /><br />
                    <label>Senha:</label><input type="text" name="txtSenha" 
                                                   /><br />
                    <label>Email:</label><input type="text" name="txtEmail" /><br />
                    <input type="reset" value="Limpar" />
                    <input type="submit" value="Salvar" />
                </form>
            </div>
        </div>



    </body>
</html>

</body>
</html>
