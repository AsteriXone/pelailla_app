<?php require_once "c://xampp/htdocs/pelailla_app/public/head.php" ?>

<section class="fondopagina, centrarlogin" style="height: 900px;">
    <div class="login-box">
        <form action="" method="post">
            <h2 style="font-size: 2.5em; color: black; text-align: center; font-weight: bold;">Login</h2>
            
            <?php 
            //incluidos desde la carpeta login para establecer la conexión con la base de datos y 
            // para establecer la Sesión del usuario que accede
           // include "login/modelo/conexion.php";
            //include "login/controlador/controlador_login.php";
            //?>
            
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" require name="email">
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" require name="password">
                <label>Contraseña</label>
            </div>

            <input class="botonlogin" type="submit" value="login" name="login">
            <div class="register-link">
                <p>¿No tienes cuenta? <a href="registro.php"> Regístrate</a></p>
            </div>
        </form>
    </div>
</section>
        
 <?php require_once "c://xampp/htdocs/pelailla_app/public/head.php" ?>