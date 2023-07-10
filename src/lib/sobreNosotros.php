<?php


require "src/lib/conexion.php";
$sql = "SELECT * FROM tbl_sobrenosotros";
$query = $conexion -> prepare($sql);
$query -> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0) { 

    
    
        foreach($results as $result) { 
            echo '<img class="img__sobreNosotros"  src="data:image/png;base64,' . base64_encode($result->imagen) . '"/>';
            echo '<p class="parrafo__sobreNosotros">';
            echo $result->descripcion;
            echo '</p>';
            } 

      
}else{
    echo '<h1>NO SOBRE NOSOTROS</h1>';
}


          