<?php
try {
    $dsn = "mysql:host=localhost;dbname=app_carpinteria;charset=utf8";
    $username = "root";
    $password = "";

    $conn = new PDO($dsn, $username, $password);

    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>