<?php
require_once 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password' AND status = '1'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    // Usuario encontrado, iniciar sesión
    header("Location: ../bienvenida.php");
} else {
    // Usuario no encontrado, redirigir a la página de inicio de sesión con un mensaje de error
    header("Location: ../index.php");
}