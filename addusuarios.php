<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
    <title>Adicionar Usuarios</title>
</head>
<body>

    <div class="nav">
        <ul class="nav-links">
            <li>Home</li>
            <li>Sobre nos</li>
            <li>Contato</li>
        </ul>
    </div>

    <h3>Usuarios</h3>

    <p>adm</p> <button type="button" class="btn-warning">editar</button>
    <p>adm#msn.com</p> <button type="button" class="btn-danger">Excluir</button>
    <br>
    <p>camila</p> <button type="button" class="btn-warning">editar</button>
    <p>camila@gmail.com</p> <button type="button" class="btn-danger">Excluir</button>

    <h3>Adicionar Usuarios</h3>
    <form method="post" action="addusuarios.php" class="main-form">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">confirmar senha</label>
            <input type=" reconfirm password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="button" class=" btn-primary btn-lg btn-block">adicionar</button>

    </form>
</body>
</html>