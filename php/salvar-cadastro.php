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

// Obter os dados do formulário
$tag = $_POST["tag"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$sexo = $_POST["sexo"];
$chefia = $_POST["chefia"];
$departamento = $_POST["departamento"];

// Inserir os dados no banco de dados
$sql = "INSERT INTO pessoa (nome, cpf, sexo, chefia) VALUES ('$nome', '$cpf', '$sexo', '$chefia')";
$result = $conn->query($sql);

// Verificar se a operação foi bem-sucedida
if ($result) {
  echo "Dados salvos com sucesso!";
} else {
  echo "Ocorreu um erro ao salvar os dados.";
}

// Fechar a conexão com o banco de dados
$conn->close();

// Redirecionar o usuário para outra página
header("Location: ./index.php");

?>