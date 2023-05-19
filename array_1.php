<?php 

// arreglo indexado
    $colores = array('rojo','azul','naranja','amarillo','fucsia','verde');

// función count($array) retorna el largo del array
    $largoColores = count($colores);
    echo "<br/> el largo del array colores es: ".$largoColores."<br>";

// Un arreglo indizado se puede desplegar en el navegador con print_r()
    print_r($colores);
    echo "<br><hr>";

// Un arreglo indexado se puede recorrer con el índice numérico
    echo "con un for: <br>";
    for ($i=0; $i < $largoColores ; $i++) { 
        echo " ".$colores[$i];
    }
    echo "<br><hr>";

// También con un while
    echo "con un while: <br>";
    $i = 0;
    while($i < $largoColores){
        echo $colores[$i]." ";
        $i++;
    }
    echo "<br><hr>";

// Otra opción es foreach
    echo "con un foreach: <br>";
    foreach($colores as $color){
        echo "$color ";
    }
   

?>