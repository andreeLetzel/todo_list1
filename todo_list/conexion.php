<?php
$servername = "localhost";
$username = "id22199816_user";
$password = "Password123$";
$dbname = "id22199816_school";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
