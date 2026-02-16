<?php
// Apertura de conexión a la base de datos

//Declaración de variables para la conexión
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$db = "todo";

//Crear conexión
$conn = new mysqli($servidor,$username,$password,$db);

//Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>