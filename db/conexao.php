<?php
$servidor = "localhost:3307";
$usuario = "root";
$senha = "";
$banco = "cadastro";

$con = mysqli_connect($servidor,$usuario,$senha,$banco);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

        
?>


