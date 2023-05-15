<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect('localhost', 'root', 'ienh', 'mydb');
    if (!$conn) {
        die('Could not connect: ' . mysqli_connect_error());
    }

    $CPF = $_POST["CPF"];
    $Nome = $_POST["Nome"];
    $Data_Nascimento = $_POST["Data_Nascimento"];
    $Telefone = $_POST["Telefone"];
    $Endereco = $_POST["Endereco"];
    $Email = $_POST["Email"];
    $senha = $_POST["senha"];
    $sobrenome = $_POST["sobrenome"];

    $sql = "INSERT INTO users (CPF, Nome, Data_Nascimento, Telefone, Endereco, Email, senha, sobrenome) 
            VALUES ('$CPF', '$Nome', '$Data_Nascimento', '$Telefone', '$Endereco', '$Email', '$senha', '$sobrenome')";

    if (mysqli_query($conn, $sql)) {
        echo "Cadastro realizado com sucesso";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
