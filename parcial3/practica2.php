<?php
$nombre = $_GET["Nombre"];
echo "Nombre: ".$nombre;

$edad = $_GET["Edad"];
echo "Edad: ".$edad. "<br><br>";

$escuela = $_GET["Escuela"];
echo "Escuela: ".$escuela. "<br><br>";

$nombre = $_GET["Nombre"];
echo "Nombre: ".$nombre. "<br><br>";

$Fecha_ingreso = $_GET["fecha_ingreso"];
echo "fecha ingreso: ".$Fecha_ingreso. "<br><br>";

$Direccion = $_GET["direccion"];
echo "direccion: ".$Direccion. "<br><br>";

if($edad >= 18){
    echo "Es mayor de edad" . "<br><br>";
}else{
    "Es menor de edad" . "<br><br>";
}

if($escuela == "CETis107"){
    echo "<div style='background-color: red;'> CETIS107 </div>" . "<br><br>";
}
if($escuela == "CBTis224"){
    echo "<div style='background-color: red;'> CBTis224 </div>" . "<br><br>";
}
if($escuela == "COBAES"){
    echo "<div style='background-color: red;'> COBAES </div>" . "<br><br>";
}


?>