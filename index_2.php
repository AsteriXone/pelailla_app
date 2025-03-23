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

            <div class="row"><br></div>

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-9 titulo">
                    <div class="row">
                        <span style="vertical-align:top; padding-left:10px; padding-top: 10px;">APPCARPENTERTOOLS</span>
                    </div>
                    <div class="row">
                        <span class="sub-titulo" style="margin-top:-300px; margin-left: 180px;">DALE UNA SEGUNDA OPORTUNIDAD A TUS HERRAMIENTAS
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                    <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="Imagenes\imagencarrusel1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="Imagenes\imagencarrusel2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="Imagenes\imagencarrusel3.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
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