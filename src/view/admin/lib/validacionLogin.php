<?php
session_start();


if($_POST){

   
    require "../../../lib/conexion.php";

    $sql = "SELECT * FROM tbl_admin";
    $query = $conexion -> prepare($sql);
    $query -> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
    if($query -> rowCount() > 0) { 
        $usuario = isset($_POST["txtUsuario"]) ? $_POST["txtUsuario"] : "" ;
        $contraseña = isset($_POST["txtContraseña"]) ? $_POST["txtContraseña"] : "" ;
        
        foreach($results as $result) { 

            if($usuario == $result->usuario && password_verify($contraseña,$result->contraseña) == true){
                
                $_SESSION["usuario"] = $usuario;
                header("location: ../admin.php");
            }else{
                header("location: ../view/loginAdmin.php?error=true");
                
            }
            

        } 

    }else{
    echo '<h1>NO HAY usuario registrado</h1>';
    }

}