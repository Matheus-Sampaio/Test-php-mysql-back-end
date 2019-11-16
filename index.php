<?php include("cabecalho.php"); ?>

<?php
    if(isset($_COOKIE["usuario_logado"])) {
?>
        <p class="text-success">Você está logado como <?=
        $_COOKIE["usuario_logado"] ?></p>
<?php
    }else{
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


    



<?php include("rodape.php"); ?>

