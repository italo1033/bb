<?php
include "conecntion.php";


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$idade = $_POST['idade'];
$estado = $_POST['estado'];
$logradouro = $_POST['cep'];
$confirmaSenha = $_POST['confirmaSenha'];
$senha = $_POST['senha'];
$instituicao = $_POST['instituicao'];
$phone = $_POST['phone'];
$usuario = $_POST['usuario'];
$sql="INSERT INTO usuario(name, cpf,rg,email,password,idade, phone, state, city,usuario,instituicao, logradouro) VALUE('$nome', '$cpf','$rg', '$email', '$senha', '$idade' , '$phone', '$estado', '$cidade','$usuario', '$instituicao' ,'$logradouro')";
// 

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>


