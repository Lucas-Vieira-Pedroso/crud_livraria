<?php

include "../infra/conexao.php";

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$ano = $_POST["ano"];

$sql = "INSERT INTO livros (titulo,autor,ano) VALUES ('$titulo','$autor','$ano') VALUES (?, ?, ?)";

if($stmt = $conn->prepare($sql)) {

  $stmt->bind_param("ssi", $titulo, $autor, $ano);
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_query($conexao, $sql);

header("Location: ../index.php");


?>