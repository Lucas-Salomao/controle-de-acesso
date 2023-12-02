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
$sql = "SELECT p.*, d.nome AS departamento
    FROM pessoa p
    JOIN departamento d ON p.fk_departamento = d.id_departamento";

$result = $conn->query($sql);

// Verificar se a consulta foi bem-sucedida
if ($result->num_rows > 0) {
 // Criar a tabela HTML
 echo "<table>";
 echo " <tr>
            <th>Nome</th>
            <th>Sexo</th>
            <th>CPF</th>
            <th>Chefia</th>
            <th>Departamento</th>
        </tr>";
 
 // Exibir os dados
 while($row = $result->fetch_assoc()) {
 echo " <tr>
            <td>".$row["nome"]."</td>
            <td>".$row["sexo"]."</td>
            <td>".$row["cpf"]."</td>
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
