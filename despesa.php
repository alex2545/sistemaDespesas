<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h3>Adicionar Despesa</h3>
    <form method="POST" action="despesa_submit.php">

    ALIMENTAÇÃO:<br>
    <input type="text" name="alimentacao"><br><br>
    COMBÚSTIVEL:<br>
    <input type="text" name="combustivel"><br><br>
    ALUGUEL:<br>
    <input type="text" name="aluguel"><br><br>
    LAZER:<br>
    <input type="text" name="lazer"><br><br>
    OUTROS:<br>
    <input type="text" name="outros"><br><br>
    DATA:<br>
    <input type="date" name="dataMes"><br><br>
    
    <button type="submit">Salvar</button>
    </form>
</body>
</html>