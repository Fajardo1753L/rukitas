<?php 

$servidor = "localhost";
  $usuario = "root";
  $password = "";
  $dbname = "rukitasbd";

  try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$dbname", $usuario, $password);      
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }catch(PDOException $e)
    {
        echo "La conexión ha fallado: " . $e->getMessage();
    }