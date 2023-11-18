<?php

require 'conexao.php';
$eds = new conexao();

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $alimentacao = $_POST['alimentacao'];
    $combustivel = $_POST['combustivel']; 
    $aluguel = $_POST['aluguel'];
    $lazer = $_POST['lazer'];
    $outros = $_POST['outros'];
    $dataMes = $_POST['dataMes'];
    $eds->update($id,$alimentacao,$combustivel,$aluguel,$lazer,$outros,$dataMes);
    header("Location:index.php");


}
