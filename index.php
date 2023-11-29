<?php

// Definir as informações de conexão
$host = "localhost:3306";
$database = "controle_acesso";
$username = "root";
$password = "";

// Conectar ao banco de dados
$conn = new mysqli($host, $username, $password, $database);

// Verificar a conexão
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

// Carregar os arquivos CSS e JavaScript
#include_once("/css/style.css");
#include_once("/js/script.js");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Controle de acesso</title>
</head>
<body>

  <header>
    <h1>Controle de acesso</h1>
  </header>

  <main>
    <section class="menu">
      <ul>
        <li><a href="php/cadastro.php">Cadastrar</a></li>
        <li><a href="php/verificar-acessos.php">Acessos</a></li>
      </ul>
    </section>
  </main>

  <footer>
    <p>Copyright © 2023</p>
  </footer>
</body>
</html>
