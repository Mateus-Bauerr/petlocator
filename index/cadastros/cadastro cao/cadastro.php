<?php
$conn = mysqli_connect('localhost', 'root', 'ienh', 'petlocator');
if (!$conn) {
    die('Could not connect: ');
}

$sql = 'INSERT INTO users(CPF, Nome, Data_Nascimento, Telefone, Endereco, Email, senha, sobrenome) values("' . $_POST["CPF"] . '","' . $_POST["Nome"] . '" , "'. $_POST["Data_Nascimento"] . '","' . $_POST["Telefone"] . '" . "' . $_POST["Endereco"] . '" . "' . $_POST["Email"] . '" . "' . $_POST["senha"] . '" . "' . $_POST["sobrenome"] . '")';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>