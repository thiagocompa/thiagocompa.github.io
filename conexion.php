<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agencia_turismo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES utf8");
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}
?>