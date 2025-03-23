<?php

// creamos conexion a bd
$host = "localhost";
$user = "root";
$pass ="";
$baseDatos = "app_carpinteria";

//conexion
try {
    $connection = new PDO("mysql:host=localhost;dbname=app_carpinteria", $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}


//creo variables para recoger la información
$name = "";
$email = "";
$password = "";
$date = "";
$permisos="";

//Comprobar que las variables se obtienen por metodo post
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $date = $_POST["fecha"];

    if (empty($name) || empty($email) || empty($password) || empty($date)) {
        $errorMessage = "Rellena todos los campos";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "El correo electrónico no es válido.";
    } elseif (strlen($password) < 4) {
        $errorMessage = "La contraseña debe tener al menos 8 caracteres.";
    } else {
        try {
            // aseguramos la contraseña mediante la función hash()
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insertar datos en la base de datos
            $sql = "INSERT INTO user (nombre, email, pass, fecha) VALUES (:name, :email, :password, :date)";
            $stament = $connection->prepare($sql);
            $stament->bindParam(':name', $name,);
            $stament->bindParam(':email', $email,);
            $stament->bindParam(':password', $hashedPassword,);
            $stament->bindParam(':date', $date,);
            $stament->execute();

            $successMessage = "Usuario añadido correctamente";
            // Limpiar los datos
            $name = "";
            $email = ""; 
            $password = ""; 
            $date = ""; 
        } catch (PDOException $e) {
            $errorMessage = "Error en la inserción de datos: " . $e->getMessage();
        }
    }
}

// Incluir la página de login
require 'login.php';
?>
