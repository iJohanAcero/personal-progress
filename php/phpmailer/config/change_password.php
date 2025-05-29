<?php
require_once 'config.php';

$id = $_POST['id']; // Asegúrate de que el ID del usuario sea correcto
$pass = $_POST['new_password'];


$query = "UPDATE usuarios SET password = '$pass' WHERE id = $id"; // Asegúrate de que el ID del usuario sea correcto
$result = $conn->query($query);

    // Usuario encontrado, iniciar sesión
    header("Location: ../index.php?messsage=success");



?>