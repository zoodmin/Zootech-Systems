<?php
$servidor = "192.168.248.13";
$usuari = "empleat";
$password = "funnyscale20";

$connexio = mysqli_connect($servidor, $usuari, $password);

if (!$connexio) {
    die("Error de conexión a la BD: " . mysqli_connect_error());
} else {
    $sql = "CREATE DATABASE IF NOT EXISTS zoomataro;";
    
    if (mysqli_query($connexio, $sql)) {
        mysqli_select_db($connexio, "zoomataro");

        // Crear tabla de usuarios
        $sql = "CREATE TABLE IF NOT EXISTS usuarios (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            contraseña VARCHAR(255) NOT NULL
        );";

        if (!mysqli_query($connexio, $sql)) {
            echo "Error al crear la tabla de usuarios: " . mysqli_error($connexio);
        }

        // Crear tabla de empleados
        $sql = "CREATE TABLE IF NOT EXISTS empleados (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            contraseña VARCHAR(255) NOT NULL,
            puesto VARCHAR(100) NOT NULL,
            fecha_contratacion DATE NOT NULL
        );";

        if (!mysqli_query($connexio, $sql)) {
            echo "Error al crear la tabla de empleados: " . mysqli_error($connexio);
        }
    } else {
        echo "Error al crear la base de datos: " . mysqli_error($connexio);
    }
}
?>
