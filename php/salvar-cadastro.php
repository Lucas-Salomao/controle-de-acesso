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

if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
  // Obter os dados do formulário
  $tag = $_POST["tag"];
  $nome = $_POST["nome"];
  $cpf = $_POST["cpf"];
  $sexo = $_POST["sexo"];
  $chefia = $_POST["chefia"];
  $departamento = intval($_POST["departamento"]);
  $foto = file_get_contents($_FILES['foto']['tmp_name']);

  // Inserir os dados no banco de dados
  $sql = "INSERT INTO pessoa (nome, cpf, sexo, chefia, fk_departamento,foto) VALUES (?,?,?,?,?,?)";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$nome, $cpf, $sexo, $chefia, $departamento, $foto]);

  // Verificar se a operação foi bem-sucedida
  if ($stmt) {
    echo "Dados salvos com sucesso na tabela pessoa!";
    // Redirecionar o usuário para outra página

    // Inserir os dados na tabela cadastro
    $sql2 = "INSERT INTO cadastro (tag_id, fk_cpf) VALUES (?,?)";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute([$tag, $cpf]);

    // Verificar se a operação foi bem-sucedida
    if ($stmt2) {
      echo "Dados salvos com sucesso na tabela cadastro!";
      // Redirecionar o usuário para outra página
      header("Location: ../index.php");
    } else {
      echo "Ocorreu um erro ao salvar os dados na tabela cadastro.";
      die('Erro na consulta: ' . mysqli_error($conn));
    }
  } else {
    echo "Ocorreu um erro ao salvar os dados.";
    die('Erro na consulta: ' . mysqli_error($conn));
  }
} else {
  // Erro ao enviar o arquivo
  echo 'Ocorreu um erro ao enviar o arquivo.';
}

// Fechar a conexão com o banco de dados
$conn->close();
