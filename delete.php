<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <form method="POST" action="delete.php">
        <label for="name">Nome</label>
        <input type="text" name="name" required>
        <button type="submit">Deletar</button>
    </form>
</body>
</html>

<?php
include"db.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    
    $sql = "DELETE from user 
    WHERE name = '$name'";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário '$name' deletado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn -> close();
?>