<?php
require 'conexao.php';
$editar = new conexao();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $lista = $editar->getListar($id);

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <h2>Editar Registro</h2>
   
<form method="POST" action="editar_submit.php">
    <input type="hidden" name="id" value="<?php echo $lista['id'];?>">

ALIMENTAÇÃO:<br>
<input type="text" name="alimentacao" value="<?php echo $lista['alimentacao'];?>" ><br><br>
COMBÚSTIVEL:<br>
<input type="text" name="combustivel" value="<?php echo $lista['combustivel'];?>"><br><br>
ALUGUEL:<br>
<input type="text" name="aluguel" value="<?php echo $lista['aluguel'];?>"><br><br>
LAZER:<br>
<input type="text" name="lazer" value="<?php echo $lista['lazer'];?>"><br><br>
OUTROS:<br>
<input type="text" name="outros" value="<?php echo $lista['outros'];?>"><br><br>
DATA:<br>
<input type="date" name="dataMes" value="<?php echo $lista['dataMes'];?>"><br><br>

<button type="submit">Salvar</button>
</form>

</body>
</html>