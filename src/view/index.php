<?php 
   if($_GET){
       $nombre = isset($_GET["txtNombre"]) ? $_GET["txtNombre"] : "" ;
       $fecha = isset($_GET["txtDate"]) ? $_GET["txtDate"] : "" ;
       header("location: https://api.whatsapp.com/send?phone=573207498479&text=Mi nombre es $nombre y mi fecha de nacimiento es $fecha quiero una consulta de tarot.");
   } 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukitas</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="src\img\fondo.jpeg" />
    <link rel="stylesheet" href="src/view/resource/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <header class="content__navBar">

        <?php
        require "src/view/components/navBar.php";
        ?>
    </header>
    <main>

        <?php
        require 'src/view/components/slider.php';
        ?>
        <h2 class="title__productosMasV"><i class="fa fa-heart" aria-hidden="true"></i> Productos Mas Vendidos <i class="fa fa-heart" aria-hidden="true"></i></h2>
        <section class="productosMasVendidos">


            <?php
            require "src/lib/conexion.php";
            require "src/lib/pMasVendidos.php";
            ?>


        </section>

    
        <label id="sobreNosotros" style="position: absolute"></label>



        <h2 class="title__productos"><i class="fa fa-heart" aria-hidden="true"></i> Sobre Nosotros <i class="fa fa-heart" aria-hidden="true"></i></h2>
        <section class="sobreNosotros">


            <img class="img__sobreNosotros"  src="src\img\fondo.jpeg" alt="sobreNosotros">
            <p class="parrafo__sobreNosotros">Somos una empresa joven y dinámica que nace con la pasión por el maquillaje, 
            la belleza y la espiritualidad. Nuestro objetivo es ofrecer productos de calidad, innovadores y asequibles, 
            que se adapten a las necesidades y gustos de cada persona. Queremos que te sientas bien contigo misma, 
            que potencies tu belleza natural y que disfrutes del arte de maquillarte. Por eso, te ofrecemos una amplia 
            gama de productos, desde los básicos imprescindibles hasta las últimas tendencias, con una variedad de colores, 
            texturas y acabados.Te invitamos a conocer nuestro catálogo y a formar parte de nuestra comunidad de amantes del maquillaje.</p>

        </section>

        <section class="content__lecturas">

            <h2 class="title__lecturas"><i class="fa fa-heart" aria-hidden="true"></i> Lecturas de Tarot <i class="fa fa-heart" aria-hidden="true"></i></h2>
            <img class="img__lecturas" src="src\img\lecturas.jpeg" width="20%"></img>

            <form class="form__lecturas " action="index.php" method="get">
                <h2>Quiero Consultarme</h2>
                <h3 class="col-form-label">Nombre Completo</h3>
                <input class="form-control-sm w-100" type="text" name="txtNombre" id="txtNombre" required>
                <h3 class="col-form-label">Fecha de Nacimiento</h3>
                <input class="form-control-sm w-100" type="text" name="txtDate" id="txtDate" required>
                <input class="btn btn-primary btn__form-lecturas " style="background-color: rgb(58,35,107) !important; border: none" type="submit" value="Enviar">


            </form>
        </section>

        


    </main>
    <footer>
        <div class="content__footer">
            <div class="content__contacto">
                <h2 class="contactanos">Contactanos</h2>
                <h4><i class="fa fa-envelope"></i> RukitaStore@gmail.com</h4>
                <h4><i class="fa fa-phone"></i> (+57) 3207498479</h4>

            </div>
            <div class="content__redes">
                <h2>Redes Sociales</h2>
                <div class="content__redes-icons">
                    <div>
                        <a href="https://www.tiktok.com/@rukitas_store" target="_blank"><img src="src\img\tik-tok.png" alt="tiktok" class="redes"></a>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/profile.php?id=100094042917667" target="_blank"><img src="src\img\facebook.png" class="redes" alt="facebook"></a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/rukitas_store" target="_blank"><img src="src\img\instagram.png" class="redes" alt="instagram"></a>
                    </div>
                </div>

            </div>
            <div class="content__terminos">
                <h2 class="terminos">Terminos</h2>
                <a class="terminos__link" href="src\view\terminos.php">
                    <h4><i class="fa fa-book"></i> Terminos y Condiciones</h4>
                </a>
            </div>

            <p class="copyright">© Copyright 2023 Todos Los Derechos Reservados Rukita`s Store</p>



        </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>