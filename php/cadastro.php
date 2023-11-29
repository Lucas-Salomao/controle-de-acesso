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
          <option value="RH">RH</option>
          <option value="FINANCEIRO">FINANCEIRO</option>
          <option value="COMPRAS">COMPRAS</option>
          <option value="ENGENHARIA">ENGENHARIA</option>
          <option value="EXPEDIÇÃO">EXPEDIÇÃO</option>
          <option value="ALMOXARIFADO">ALMOXARIFADO</option>
          <option value="PRODUÇÃO">PRODUÇÃO</option>
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
