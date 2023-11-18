<?php 

require 'conexao.php';
$e = new conexao();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $e->delete($id);
    header("Location:index.php");

}

