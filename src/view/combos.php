<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukitas</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="../img/fondo.jpeg" />
    <link rel="stylesheet" href="./resource/combos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="content__title">
        <h2 class="title__productos"><i class="fa fa-heart" aria-hidden="true"></i> Combos <i class="fa fa-heart" aria-hidden="true"></i></h2>
    </div>   
    <section class="content__cajas">
        <?php 
            require "../lib/combos.php";
        ?>
    </section>

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
                        <a href="https://www.tiktok.com/@rukitas_store" target="_blank"><img src="../img/tik-tok.png" alt="tiktok" class="redes"></a>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/profile.php?id=100094042917667" target="_blank"><img src="../img/facebook.png" class="redes" alt="facebook"></a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/rukitas_store" target="_blank"><img src="../img/instagram.png" class="redes" alt="instagram"></a>
                    </div>
                </div>

            </div>
            <div class="content__terminos">
                <h2 class="terminos">Terminos</h2>
                <a class="terminos__link" href="./terminos.php">
                    <h4><i class="fa fa-book"></i> Terminos y Condiciones</h4>
                </a>
            </div>

            <p class="copyright">© Copyright 2023 Todos Los Derechos Reservados Rukita`s Store <br> Developed by E&R Creations</p>
            


        </div>

    </footer>





<script src="./resource/combos.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>