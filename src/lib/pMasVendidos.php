<?php

$sql = "SELECT * FROM tbl_pmasvendidos";
$query = $conexion -> prepare($sql);
$query -> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0) { 

    
    
        foreach($results as $result) { 
            echo '<div class="card__producto '.$result->color.'">';
            echo '<img  class="img__producto" src = "data:image/png;base64,' . base64_encode($result->imagen) . '"/>';
            echo '<button class="btn btn-primary btnCart" >Añadir al Carrito</button>';
            echo '</div>';
            } 

      
}else{
    echo '<h1>NO HAY PRODUCTOS MAS VENDIDOS</h1>';
}