<?php require_once "c://xampp/htdocs/pelailla_app/public/header.php" ?>

<?php require_once "c://xampp/htdocs/pelailla_app/public/head.php" ?>

<section class="fondopagina, centrarlogin" style="height: 900px;">
    <div class="login-box">
        <form action="" method="POST">
            <h2 style="font-size: 2.5em; color: black; text-align: center; font-weight: bold;">Login</h2>
            
            <?php 
            //incluidos desde la carpeta login para establecer la conexión con la base de datos y 
            // para establecer la Sesión del usuario que accede
           // include "login/modelo/conexion.php";
            //include "login/controlador/controlador_login.php";
            //?>
            
            <div class="input-box">
                <input type="email" require name="email">
                <label>Email</label>
            </div>
            <div class="input-box">
            
                <label>Contraseña</label>
                <input type="password" require name="password" id="password">
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
        
<?php require_once "c://xampp/htdocs/pelailla_app/public/footer.php" ?>