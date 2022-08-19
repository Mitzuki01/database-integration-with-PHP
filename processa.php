<?php 

include("conexao.php");

$id=0;
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql=$mysqli->prepare("insert into cadastro values (?,?,?,?)");

$sql->bind_param("issss",$id,$nome,$email,$senha);

$sql->execute();

$sql->store_result();

$result=$sql->affected_rows;

if($result > 0){
    echo "Dados Inseridos com Sucesso!";
}else{
    echo "Houve um erro";
}