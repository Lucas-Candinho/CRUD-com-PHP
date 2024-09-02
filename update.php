<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form method="POST" action="update.php">
        <label for="name">Nome Original</label>
        <input type="text" name="name" required>
        <br><br>
        <label for="upd_name">Nome Novo</label>
        <input type="text" name="upd_name">
        <br>
        <label for="upd_email">Email Novo</label>
        <input type="text" name="upd_email">
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>

<?php
include"db.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $updName = $_POST['upd_name'];
    $updEmail = $_POST['upd_email'];

    if(isset($updName) && isset($updEmail)) {
        $sql = "UPDATE user
        SET name = '$updName', email = '$updEmail' 
        WHERE name = '$name'
        "; 
   }
    if (empty($updName)) {
         $sql = "UPDATE user
        SET email = '$updEmail'
        WHERE name = '$name'
        "; 
    } else {
        $sql = "UPDATE user
       SET name = '$updName'
       WHERE name = '$name'
       "; 
   }

    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn -> close();
?>