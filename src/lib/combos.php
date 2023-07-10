<?php 

require "../lib/conexion.php";
$sql = "SELECT * FROM tbl_combos";
$query = $conexion -> prepare($sql);
$query -> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0) { 

    
    
        foreach($results as $result) { 
            echo '<div class="card__producto c'.$result->id.'">';
            echo '<img  class="img__producto" src = "data:image/png;base64,' . base64_encode($result->imagen) . '"/>';
            echo '</div>';
            } 

      
}else{
    echo '<h1>NO HAY CAJAS SORPRESAS</h1>';
}