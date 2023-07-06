
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukitas</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="../../../img/fondo.jpeg" />
    <link rel="stylesheet" href="../view/resource/loginAdmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<?php 

  if(isset($_GET["error"]) && $_GET["error"] == true){

    echo '<div class="modalError">';
    echo '<i class="fa fa-times" style="color:white">';
    echo '</i>';
    echo '<h5> Usuario o Contraseña Equivocada</h5>';
    echo '</div>';

  }

?>


<form action="../lib/validacionLogin.php" method="post" class="contentLogin">
  <h2 class="title">Login Administrativo</h2>
  <br>
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Usuario</label>
    <input type="text" name="txtUsuario" id="form2Example1" class="form-control" required/>
    
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Contraseña</label>
    <input type="password" name="txtContraseña" id="form2Example2" class="form-control" required/>
    
  </div>

    <div class="col">
      <a href="#!">Olvidaste la Contraseña?</a>
    </div>
    <br>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: rgb(58,35,107); border: none">Ingresar</button>

  </div>
</form>

<script src="./resource/modalError.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>