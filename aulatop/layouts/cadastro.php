<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Cadastro</title>
</head>
<body>
    <form method="POST">
        <div class="container">
            <h3>Cadastro</h3>
            <input class="form-control" type="text" name="nome" placeholder="Nome completo">
            <br>
            <input class="form-control" type="mail" name="email" placeholder="exemplo@gmail.com">
            <br>
            <input class="form-control" type="text" name="login" placeholder="Login">
            <br>
            <input class="form-control" type="password" name="password" placeholder="Senha">
            <br>
            <input type="submit" name="cadastrado" class="btn btn-success" value="Cadastra-se">
        </div>
    </form>
</body>
</html>