<?php

// creamos un array de alumnos 

$lista = [
    [
        "nombre" => "Ana",
        "apellido" => "Ruiz",
        "email" => "aruiz2003@hotmail.com",
        "curso" => 1
    ],
    [
        "nombre" => "Pablo",
        "apellido" => "Rey",
        "email" => "pablitomanya02@hotmail.com",
        "curso" => 2
    ],
    [
        "nombre" => "Lucía",
        "apellido" => "Brum",
        "email" => "lucibolsilluda@hotmail.com",
        "curso" => 1
    ]
];

echo $lista[1]['nombre'];
echo "<br><hr>";

for($i=0;$i < count($lista);$i++){
    echo "Número de lista: ".($i+1)."<br>";
    foreach($lista[$i] as $clave =>$valor){
        echo "ñ$clave:    $valor<br>";
    } echo "<br>";
}
?>