<?php
$conn = mysqli_connect('localhost', 'laboratorio', 'estudante', 'projeto_integrador');
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';

$sql = "SELECT usuario, senha FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "\n" . "usuario: " . $row["usuario"]. " - Senha: " . $row["senha"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>