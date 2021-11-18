<?php
if (isset($_POST['logar'])) {
    if (($_POST['login'] == 'admin') && ($_POST['senha'] == 'admin')) {
       $_SESSION['logado'] = true;
       header('Location: index.php');
    } else {
        echo 'Login ou senha incorreta!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <div class="container">
            <h3>Efetue seu login</h3>
            <input class="form-control" type="text" name="login" placeholder="Login">
            <br>
            <input class="form-control" type="password" name="senha" placeholder="Senha">
            <br>
            <input type="submit" name="logar" class="btn btn-success">
        </div>
    </form>
</body>
</html>