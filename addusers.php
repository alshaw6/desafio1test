
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Navbar</title>
</head>
<body>
    <nav>
        <div class="logo">
            <h4>Desafio PHP</h4>
        </div>

        <ul class="nav-links">
            <li>
                <a href="#">home</a>
            </li>
            <li>
                <a href="#">Adicionar produtos</a>
            </li>
            <li>
                <a href="#">Usuarios</a>
            </li>
        </ul>
    </nav>

    <div class="adicionar">
        <h2>Adicionar Usuarios</h2>
        <br>
        <form action="">
            <div class="input-container">
              <input class="input-field" type="text" placeholder="Nome" name="usrnm">
            </div>
          
            <div class="input-container">
              <input class="input-field" type="text" placeholder="Email" name="email">
            </div>
          
            <div class="input-container">
              <input class="input-field" type="password" placeholder="Senha" name="psw">
            </div>

            <div class="input-container">
                <input class="input-field" type="password" placeholder="Confirmar senha" name="psw">
              </div>
          
            <button type="submit" class="btn">Adicionar</button>
          </form>
    </div>

  
    <aside class="users">

            <ul>

                <li>Alvaro</li>
                <button class=" btn1 verde" type="edit" value="edit">Editar</button>
                <br>
                <br>
                <li>alshaw6@hotmail.com</li>
                <button class=" btn2 vermelho" type="delete" value="delete">Excluir</button> 
                       

                
            </ul>
        </aside>

</body>
</html>