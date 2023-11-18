<?php
require 'conexao.php';
$adc = new conexao();

if(isset($_POST['alimentacao'])){
    $alimentacao = $_POST['alimentacao'];
    $combustivel = $_POST['combustivel']; 
    $aluguel = $_POST['aluguel'];
    $lazer = $_POST['lazer'];
    $outros = $_POST['outros'];
    $dataMes = $_POST['dataMes'];
    $adc->despesa($alimentacao,$combustivel,$aluguel,$lazer,$outros,$dataMes);
    header("Location:index.php");
   
}

