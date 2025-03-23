<?php 
    //incluidos desde la carpeta login para establecer la conexión con la base de datos y 
    // para establecer la Sesión del usuario que accede
   // include "login/modelologin.php";
    //include "login/controladorlogin.php";
    print_r($_POST);
    if(empty($_POST)){
        echo " no seteado";
    }else{
        echo "seteado";
        // optenemos los datos
        $email = $_POST["email"];
        $password = $_POST["password"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // Este es el head y aquí van los estilos y el título de la página
        require "public/head_2.php";
    ?>
</head>
<body>
<header>
   <?php
        // Aquí va el menú
        require "public/menu.php";
    ?>
</header>  
<div>
    <section class="fondopagina, centrarlogin" style="height: 900px;">
        <div class="login-box">
            <form action="" method="POST">
                <h2 style="font-size: 2.5em; color: black; text-align: center; font-weight: bold;">Login</h2>
                
                
                
                <div class="input-box">
                    <input type="email" require name="email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <input type="password" require name="password" id="password">
                    <label>Contraseña</label>

                    
                    <div class="box-eye">
                        <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                        <i id="eyepassword" class="fa-solid fa-eye changePassword "></i>
                        </button>
                    </div>
        
                </div>

                <input  type="submit" class="botonlogin" value="login" name="login">
                <div class="register-link">
                    <p>¿Quieres formar parte de la comunidad? <a href="registro.php"> Regístrate</a></p>
                </div>
            </form>
        </div>
    </section>
</div>  
<footer>
    <?php
        require "public/footer.php";
    ?>
</footer>
</body>
</html>