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

// Consulta SQL JOIN
$sql = "SELECT a.id_acesso, a.tag_id, c.fk_cpf, p.nome, p.sexo, p.cpf, p.chefia, d.nome AS departamento
       FROM acessos a
       JOIN cadastro c ON a.tag_id = c.tag_id
       JOIN pessoa p ON c.fk_cpf = p.cpf
       JOIN departamento d ON p.fk_departamento = d.id_departamento";

$result = $conn->query($sql);

// Verificar se a consulta foi bem-sucedida
if ($result->num_rows > 0) {
 // Criar a tabela HTML
 echo "<table>";
 echo " <tr>
            <th>ID Acesso</th>
            <th>Tag ID</th>
            <th>CPF</th>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Chefia</th>
            <th>Departamento</th>
        </tr>";
 
 // Exibir os dados
 while($row = $result->fetch_assoc()) {
   echo "<tr>
            <td>".$row["id_acesso"]."</td>
            <td>".$row["tag_id"]."</td>
            <td>".$row["fk_cpf"]."</td>
            <td>".$row["nome"]."</td>
            <td>".$row["sexo"]."</td>
            <td>".$row["chefia"]."</td>
            <td>".$row["departamento"]."</td>
        </tr>";
 }

 echo "</table>";
} else {
 echo "0 resultados";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>

