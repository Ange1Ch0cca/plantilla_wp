<?php
// Configuración de la conexión a la base de datos
$host = "localhost"; // Cambia esto al nombre de tu servidor de base de datos si es diferente
$usuario = "root"; // Cambia esto a tu nombre de usuario de MySQL
$contrasena = "root"; // Cambia esto a tu contraseña de MySQL
$base_de_datos = "sistemaventas"; // Cambia esto al nombre de tu base de datos

// Crear una conexión a la base de datos
$connection = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if (!$connection) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}


?>
