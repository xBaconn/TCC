<?php

session_start();

// conectar no banco de dados
include('conexao.php');


//if(isset($_SESSION["cpf"]) && $_SESSION["password"] === true){
//   header("location: index.html");
//  exit;/
//}
// Define variables and initialize with empty values

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST ['nome'];
$telefone = $_POST["telefone"];
$data = $_POST["data"];
$repsenha = $_POST["email"];

$sql = "SELECT * FROM cad_comprador WHERE email = '$email'";

if ($resultado = mysqli_query($conn, $sql)) {
    $num_rows = mysqli_num_rows($resultado);
    // testando se o cadastro existe
    if ($num_rows > 0) {
        // testar se a senha confere
        echo "CADASTRO EXISTE!!";
        $sql = "SELECT nome FROM cad_comprador WHERE email = '$email' and senha = '$senha'";
        if ($resultado = mysqli_query($conn, $sql)) {
            $num_rows = mysqli_num_rows($resultado);
            if ($num_rows > 0) {
                //$nome = $resultado['nome'];
                // ACERTOU A SENHA
                $_SESSION['email'] = $email;
                // vc vai precisar setar o nome na variavel de session
                $_SESSION['nome'] = $nome;
                header("Location: painel.php");
            } else {
                // ERROU A SENHA
                echo "ERROU A SENHA BURRO";
            }
        } else {
            // ERRO NO SQL
        }
    } else {
        echo "CADASTRO NAO EXISTE!";
    }
} else {
    echo "ERRO NA VERIFICACAO DO LOGIN; <br>";
}
?>
