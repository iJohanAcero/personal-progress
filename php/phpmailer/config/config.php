<?php 

// Configuración de la base de datos
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db = 'recuperar'; 

// Crear conexión
$conn = new mysqli($host, $user, $password, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


?>