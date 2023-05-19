<?php
$animales = ["perro","hamster","loro","gato"];
// para desestructurar un arreglo podemos
// usar la función list()
list($u,$d,$t,$cu) = $animales;
echo "<br><hr>";
echo "Usamos la función list para desetructurar el arreglo y desplegamos el elemento cargado en la variable \$u: $u";
echo "<br><hr>";
$digitos = range(0,9);
echo "usamos la función range() para cargar un arreglo con los digitos<br>";
foreach($digitos as $d){
    echo "$d ";
};
echo "<br><hr>";
echo "usamos la función range() para cargar un arreglo con las letras minúsculas<br>";
$abc = range("a","z");
foreach($abc as $letra){
    echo "$letra ";
};
echo "<br><hr>";
if(in_array("ch",$abc)){
    echo "ch está en el abecedario";
}else {
    echo "ch no está en el abecedario";
}
echo "<br><hr>";
if(in_array("w",$abc)){
    echo "w está en el abecedario";
}else {
    echo "w no está en el abecedario";
}
?>