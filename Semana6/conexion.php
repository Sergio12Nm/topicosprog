<?php
$servidor = "sql309.ezyro.com";
$usuario = "ezyro_41287770";
$password = "dd42138c6ef58";
$database = "ezyro_41287770_unidad1";

#desactivar reporte automatico de errores
mysqli_report(MYSQLI_REPORT_OFF);

$conn = mysqli_connect($servidor, $usuario, $password, $database);

if (!$conn) {
    header("Location: errorconn.php");
    exit(); // Detenemos la ejecución del script
}   
?>