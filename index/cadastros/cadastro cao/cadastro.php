<?php
$conn = mysqli_connect('localhost', 'laboratorio', 'estudante', 'projeto_integrador');
if (!$conn) {
    die('Could not connect: ');
}

$sql = 'INSERT INTO usuarios(usuario, senha) values("' . $_POST["usuario"] . '","' . $_POST["senha"] . '")';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>