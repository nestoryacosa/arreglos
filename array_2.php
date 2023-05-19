<?php
    // Arreglo con elementos asociados a una clave
    $alumno1 = array(
        "nombre"=>" Lucas ", 
        "apellido "=>" Varela ",
        " edad"=>20,
        " email "=>"lucavar02@gmail.com"
        );

    echo "<br/>";
    print_r($alumno1);
    echo "<br/>";

    print($alumno1['nombre']);
    echo "<br/>";

    print($alumno1['email']);
    echo "<br/>";

// para recorrer un arreglo con cleve usamos FOREACH
    foreach($alumno1 as $indice=>&$valor){
        echo $indice. ": " . $alumno1[$indice];
        echo "<br/>";
    }

?>