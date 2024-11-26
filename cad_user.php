<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

require('conexao.php');

try {
  $sql = "INSERT INTO cadusuario (nome, email, senha, 
  VALUES ('$nome', '$email', '$senha')";

  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>