<?php

class conexao{

private $pdo;


public function __construct(){

$dbname = "sistemaDeDespesas";
$host = "localhost";
$port = "3306";
$user = "root";
$pass = "";


$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host.";port=".$port."",$user,$pass);


}

public function listar(){

    $sql = "SELECT * FROM usuario";
    $sql = $this->pdo->query($sql);
    if($sql->rowCount()>0){
       return $sql->fetchAll();

    }else{
       return array();
    }
    
}

public function despesa($alimentacao,$combustivel,$aluguel,$lazer,$outros,$dataMes){
    $sql = "INSERT INTO usuario(alimentacao,combustivel,aluguel,lazer,outros,dataMes)VALUES(:alimentacao,:combustivel,:aluguel,:lazer,:outros,:dataMes)";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(":alimentacao",$alimentacao);
    $sql->bindValue(":combustivel",$combustivel);
    $sql->bindValue(":aluguel",$aluguel);
    $sql->bindValue(":lazer",$lazer);
    $sql->bindValue(":outros",$outros);
    $sql->bindValue(":dataMes",$dataMes);
    $sql->execute();
}

public function delete($id){

$sql = "DELETE FROM usuario WHERE id = :id";
$sql = $this->pdo->prepare($sql);
$sql->bindValue(":id",$id);
$sql->execute();

}

public function update($id,$alimentacao,$combustivel,$aluguel,$lazer,$outros,$dataMes){
    $sql ="UPDATE usuario SET alimentacao =:alimentacao ,combustivel=:combustivel,aluguel= :aluguel,lazer=:lazer,outros=:outros,dataMes=:dataMes WHERE id = :id";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(":id",$id);
    $sql->bindValue(":alimentacao",$alimentacao);
    $sql->bindValue(":combustivel",$combustivel);
    $sql->bindValue(":aluguel",$aluguel);
    $sql->bindValue(":lazer",$lazer);
    $sql->bindValue(":outros",$outros);
    $sql->bindValue(":dataMes",$dataMes);
    $sql->execute();
}

public function getListar($id){
    $sql = "SELECT * FROM usuario WHERE id = :id";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(":id",$id);
    $sql->execute();

    if($sql->rowCount()>0){
        return $sql->fetch();

    }else{
        return array();
    }
}

}

