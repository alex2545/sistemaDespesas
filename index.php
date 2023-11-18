<?php
require 'conexao.php';
$i = new conexao();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>sistema de despesas</title>
</head>
<body class="body1">
    <div class="container">
    <h1>Sistema de Despesas</h1>
    <table border="4" width="100%" class="table table-striped">

    <tr>
    <th>ID</th>
    <th>ALIMENTAÇÃO</th>
    <th>COMBÚSTIVEL</th>
    <th>ALUGUEL</th>
    <th>LAZER</th>
    <th>OUTROS</th>
    <th>DATA</th>
    <th>TOTAL</th>
    <th>AÇÕES</th>
</tr>

<?php
    $lista = $i->listar();
    foreach($lista as $itens){
    $alimentacao = $itens['alimentacao'];
    $combustivel = $itens['combustivel'];
    $aluguel = $itens['aluguel'];
    $lazer = $itens['lazer'];
    $outros = $itens['outros'];
    $total = $alimentacao + $combustivel + $aluguel + $lazer + $outros;
    ?>

    <tr>
        <td><?php echo $itens['id']; ?></td>
        <td><?php echo $itens['alimentacao']; ?></td>
        <td><?php echo $itens['combustivel']; ?></td>
        <td><?php echo $itens['aluguel']; ?></td>
        <td><?php echo $itens['lazer']; ?></td>
        <td><?php echo $itens['outros']; ?></td>
        <td><?php echo $itens['dataMes']; ?></td>
        <td><?php echo $total ?></td>
        <td><a type="button" class="btn btn-primary" href="editar.php?id=<?php echo $itens['id']; ?> " data-bs-toggle="modal" data-bs-target="#editarModal">EDITAR</a>
        <a type="button" class="btn btn-danger" href="delete.php?id=<?php echo $itens['id']; ?>" data-bs-toggle="modal" data-bs-target="#excluirModal">EXCLUIR</a></td>


    </tr>
    


<?php } ?>
    </table>
    <a type="button" class="btn btn-success" href="despesa.php">ADICIONAR DESPESA</a>
    </div>
<!-- Modal editar-->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR TITULO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Tem certeza que deseja editar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
        <a id="editarModal" type="button" class="btn btn-primary" href="editar.php?id=<?php echo $itens['id']; ?> ">Editar</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal excluir -->
<div class="modal fade" id="excluirModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">EXCLUIR TITULO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Tem certeza que deseja excluir?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
        <a id="excluirModal" type="button" class="btn btn-primary" href="excluir.php?id=<?php echo $itens['id']; ?> ">Excluir</a>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>