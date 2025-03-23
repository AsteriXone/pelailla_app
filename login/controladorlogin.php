<?php
session_start();

if (!empty($_POST["login"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        try {
            $sql = "SELECT * FROM user WHERE email = :email";
            $stament = $conn->prepare($sql);
            $stament->bindParam(':email', $email,);
            $stament->execute();
            
            // Obtener resultado de consulta
            $datos = $stament->fetch(PDO::FETCH_OBJ);

            if ($datos && password_verify($password, $datos->pass)) {
                // Iniciar variables de sesión
                $_SESSION["id"] = $datos->id;
                $_SESSION["nombre"] = $datos->nombre;
                $_SESSION["email"] = $datos->email;
                $_SESSION["fecha"] = $datos->fecha;
                $_SESSION["permisos"] = $datos->permisos;

                // Redirección según permisos
                if ($_SESSION["permisos"] == 2) {
                    header("location: Área de usuario.php");
                    exit();
                } else {
                    header("location: PanelAdmin/index.php");
                    exit();
                }
            } else {
                echo "<div class='alert alert-danger' style='text-align:center;'>Acceso Denegado</div>";
            }
        } catch (PDOException $e) {
            echo "<div class='alert alert-danger' style='text-align:center;'>Ha ocurrido un error. Por favor, inténtelo más tarde.</div>";
            error_log($e->getMessage()); // Registrar error
        }
    } else {
        echo "<div class='alert alert-danger' style='text-align:center;'>Rellene los campos</div>";
    }
}
?>
