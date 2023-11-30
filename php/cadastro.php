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

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
</head>
<body>

  <header>
    <h1>Cadastro</h1>
  </header>

  <main>
    <form action="salvar-cadastro.php" method="post">

      <div class="campo">
        <label for="tag">Tag:</label>
        <input type="text" name="tag" id="tag" required>
      </div>

      <div class="campo">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
      </div>

      <div class="campo">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" required>
      </div>

      <div class="campo">
        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo">
          <option value="masculino">Masculino</option>
          <option value="feminino">Feminino</option>
        </select>
      </div>

      <div class="campo">
        <label for="chefia">Chefia:</label>
        <input type="text" name="chefia" id="chefia">
      </div>

      <div class="campo">
        <label for="departamento">Departamento:</label>
        <select name="departamento" id="departamento">
          <option value="1">RH</option>
          <option value="2">FINANCEIRO</option>
          <option value="3">COMPRAS</option>
          <option value="4">ENGENHARIA</option>
          <option value="5">EXPEDIÇÃO</option>
          <option value="6">ALMOXARIFADO</option>
          <option value="7">PRODUÇÃO</option>
        </select>
      </div>

      <button type="submit">Cadastrar</button>

    </form>
    <button type="button" onclick="window.location.href='../index.php'">Voltar</button>

  </main>

  <footer>
    <p>Copyright © 2023</p>
  </footer>

</body>
</html>
