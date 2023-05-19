<?php
    // Creamos un arreglo con la función array()
    $compra = array('pan','sal','servilletas','media docena de huevos');
    // si queremos mostrar el segundo elemento:
    //echo $compra[3]."<br>";
    // mostramos los elementos:
   print_r($compra);
    //echo "<br><hr>";
    // podemos agregar un elemento al final así:
    $compra[]= "aceite de girasol";
    print_r($compra);
    echo "<br><hr>";
    // También podemos agregar un elemento al final así:
    array_push($compra,'queso rallado');
    print_r($compra);
    echo "<br><hr>";
    // Otra forma de declarar un arreglo
    // lo creamos vacío
    $materiales=[];
    // le agregamos un elemento
    $materiales[]="papel glacé";
    $materiales[]="goma eva";
    $materiales[]= "cascola";
    // podemos desplegarlo con print_r() o var_dump() 
    // observa las diferencias con print_r()
    var_dump($materiales);/*
    // podemos crearlo con elementos
    $notas = ['do','re','mi','fa','sol','la','si'];
    echo "<br><hr>";
    var_dump($notas);*/

?>