<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form method="POST" action="create.php">
        <label for="name">Nome</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
include"db.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO user (name, email) VALUE('$name', '$email')"; 

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn -> close();
?>