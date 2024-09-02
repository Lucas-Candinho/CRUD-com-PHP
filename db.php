<?php 
$serverName = "localhost";
$userName = "root";
$password = "root";
$db_name = "crud_LC";

$conn = new mysqli($serverName, $userName, $password, $db_name);

if($conn -> connect_error) {
    die("Conexão Falhou!". $conn -> connect_error);
}
// Se conn -> (recebeu/receber) connect_error

?>