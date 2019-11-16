<?php include("cabecalho.php"); ?>

<?php
    if(isset($_GET["login"]) && $_GET["login"]==true) {
?>
        <p class="alert-success">Logado com sucesso!</p>
<?php
    }
?>
<?php
    if(isset($_GET["login"]) && $_GET["login"]==false) {
?>
        <p class="alert-danger">Usuário ou senha inválida!</p>
<?php
    }  
?>


    <form action="login.php" method="post">
        <table class="table">
            <tr>
                <td>Email</td>
                <td><input type="text" class="form-control" name="email" /></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input type="password" class="form-control" name="senha"></td>
            </tr>
            <tr>
                <td><button type="submit" value="Cadastrar" class="btn btn-primary">submit</button></td>
            </tr>
        </table>
    </form>



<?php include("rodape.php"); ?>

