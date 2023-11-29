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

// Fechar a conexão com o banco de dados
$conn->close();

include('html/index.html');
// Carregar os arquivos CSS e JavaScript
#include_once("/css/style.css");
#include_once("/js/script.js");
?>


