<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydb');
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

$CPF = isset($_POST['CPF']) ? $_POST['CPF'] : '';
$Nome = isset($_POST['Nome']) ? $_POST['Nome'] : '';
$dataNascimento = isset($_POST['Data_Nascimento']) ? $_POST['Data_Nascimento'] : '';
$telefone = isset($_POST['Telefone']) ? $_POST['Telefone'] : '';
$endereco = isset($_POST['Endereco']) ? $_POST['Endereco'] : '';
$email = isset($_POST['Email']) ? $_POST['Email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';

// Verifica se todos os campos obrigatórios foram preenchidos
if ($CPF !== '' && $Nome !== '' && $dataNascimento !== '' && $telefone !== '' && $endereco !== '' && $email !== '' && $senha !== '' && $sobrenome !== '') {
    $sql = "INSERT INTO users (CPF, Nome, Data_Nascimento, Telefone, Endereco, Email, senha, sobrenome) VALUES ('$CPF', '$Nome', '$dataNascimento', '$telefone', '$endereco', '$email', '$senha', '$sobrenome')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Please fill all the required fields.";
}

$conn->close();
?>
