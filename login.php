<?php
include './conect.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = pg_query ( $con, "SELECT * FROM USERS WHERE '$login' = login and '$senha' = senha;" );
$row = pg_num_rows($sql);
    
if ($row == 1) {
    session_start();

    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

    $_SESSION['logado'] = true;
    header("location: index.php");
}

?>

<?php
//include './conect.php';
//
//$login = $_POST['login'];
//$senha = $_POST['senha'];
//
//if ($login == $_POST['login'] and $senha == $_POST['senha']) {
//    session_start();
//    $_SESSION['logado'] = true;
//    header("location: index.php");
//}
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="image/favicon.ico">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="awesome/css/font-awesome.css" rel="stylesheet">
        <link href="awesome/scss/" rel="stylesheet">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/jumbotron-narrow.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <title>Login</title>

    <div class="container ">
        <form method="post">
            <h2>SICAES - Sistema de Cadastro de Estudantes</h2>
            <h4 class="form-signin-heading"><i class="glyphicon glyphicon-log-in"></i> Login</h4>
            <input type="email" name="login" class="form-control" placeholder="Email" required autofocus><br/>
            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
            <label class="checkbox"><input type="checkbox" value="remember-me"> Lembrar senha</label>
            <button class="btn btn-success glyphicon glyphicon-user" type="submit">Entrar</button >
            <ul class="list-unstyled"><br/>
                <li><a href="cadastro.php"onclick="return confirm('Entre em contato com rog_reg@hotmail.com\n\npara criar uma nona conta.')">Criar uma conta</a></li>
                <li><a href="cadastro.php"onclick="return confirm('Entre em contato com rog_reg@hotmail.com\n\npara redefinir seu login de usuário.')">Esqueceu seu usuário?</a></li>
                <li><a href="cadastro.php"onclick="return confirm('Entre em contato com rog_reg@hotmail.com\n\npara alterar sua senha.')">Esqueceu sua senha?</a></li>
            </ul>
        </form>
        <div class="footer">
            <p>&copy; URES-RR 2014</p>
        </div>
    </div>
