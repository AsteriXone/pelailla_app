<?php require_once "public/header.php" ?>

<section class="fondopagina, centrarlogin" style="height: 900px;">
    <div class="login-box" style="height: 550px;">
        <form action="registroBBDD.php" method="post">
            <h2 style="font-size: 2.5em; color: black; text-align: center; font-weight: bold;">Regístrate</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="nombre"></ion-icon></span>
                <input type="text" required name="nombre">
                <label>Nombre</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="email"></ion-icon></span>
                <input type="email" required name="email">
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" required name="pass">
                <label>Contraseña</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="calendar"></ion-icon></span>
                <input type="date" required name="fecha">
                <label>Fecha de nacimiento</label>
            </div>
            <button class="botonlogin" type="submit"><a href="login.php"> Guardar</a></button>
        </form>
    </div>   
</section>


<?php require_once "c://xampp/htdocs/pelailla_app/public/footer.php" ?>
        