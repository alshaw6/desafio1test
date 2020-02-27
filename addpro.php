<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
  <title>AdicionarProduto</title>
</head>
<body>

<?php

if(isset($_POST['save'])){
    $data = file_get_contents('pro.json');
    $input = array(
      'id' => $_POST['id'],
      'nome' => $_POST['nome'],
			'descricao' => $_POST['descricao'],
      'preco' => $_POST['preco'],
    );
    $data[] = $input;
    file_put_contents('pro.json', $data);
    
    header('location: listapro.php');
  }
  ?>



  <div class="nav">
    <ul class="nav-links">
      <li>Home</li>
      <li>Sobre nos</li>
      <li>Contato</li>
    </ul>
  </div>

  <h3>Adicionar Produto</h3>
  <form action="listapro.php">
    <div class="row">
      <div class="col">
        <p>nome</p>
        <input type="text" class="form-control">
      </div>
      <div class="col">
        <p>Preco</p>
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <br>
      <label for="exampleFormControlTextarea1">Descricao</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
    </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="validatedCustomFile" required>
      <label class="custom-file-label" for="validatedCustomFile">Selecione a foto</label>
    </div>
    <br><br>
    <button type="button" class=" btn-primary btn-lg btn-block">adicionar</button>

  </form>




</body>

</html>