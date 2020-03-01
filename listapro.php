<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ListadeProdutos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
</head>
<?php

$data = file_get_contents('pro.json');

$Products = json_decode($data,true);
 

?>

<body>
<div class="nav">
    <ul class="nav-links">
      <li>Home</li>
      <li>Sobre nos</li>
      <li>Contato</li>
    </ul>
  </div>
  <h3>Lista de Produtos</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Preco</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($Products as $data){;?>

            <tr>
          <div>
          <th><?php echo $data['id']?></th>
          <td><?php echo $data['produto'] ?></td>
          <td><?php echo $data['descricao'] ?></td>
          <td><?php echo $data['preco'] ?></td>
          </div>

          <td><a href="editarProduto.php?id=<?php echo $data['id']?>" type="button" class="btn-primary">Editar</a>
          <button type="button" class="btn-danger">Excluir</button>
        </td>
      </tr>
      
      <?php
     };
     ?>
        </tbody>
    </table>
</body>
</html>