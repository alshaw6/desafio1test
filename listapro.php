<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ListadeProdutos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="nav">
    <ul class="nav-links">
      <li>Home</li>
      <li>Sobre nos</li>
      <li>Contato</li>
    </ul>
  </div>

  <?php

$data = file_get_contents('pro.json');

foreach($data as $row){
    echo "     <tr>
    <th>.$row->ID</th>
    <th>.$row->Nome</th>
    <th>.$row->Descricao</th>
    <th>.$row->Preco</th>
</tr>";
}

?>



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
            <tr>
                <td>1</td>
                <td>Samsung Note</td>
                <td>cell preto</td>
                <td>R$5.000.00 <button type="button" class="btn-primary">Adicionar</button>
                    <button type="button" class="btn-danger">Excluir</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Iphone X</td>
                <td>branco</td>
                <td>R$4.500.00 <button type="button" class="btn-primary">Adicionar</button>
                    <button type="button" class="btn-danger">Excluir</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Wuawei</td>
                <td>silver</td>
                <td>$R1.200.00 <button type="button" class="btn-primary">Adicionar</button>
                    <button type="button" class="btn-danger">Excluir</button></td>
            </tr>
        </tbody>
    </table>
</body>
</html>