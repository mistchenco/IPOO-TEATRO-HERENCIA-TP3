<?php
include_once "teatroTres.php";
include_once "Funcion.php";
include_once "obraTeatro.php";
include_once "Musical.php";
include_once "Cine.php";
$coleccionFunciones=array();
$funcion1=new obraTeatro("Augusto",16,2,300,"Obra");
$funcion2=new Musical("nahir",16,1,350,"Musical", "pachi",5);
$funcion3=new Cine("ambar",20,5,800,"Cine","drama","arg");
$funcion4=new obraTeatro("Augusto",16,2,300,"Obra");
$coleccionFunciones=[$funcion1,$funcion2, $funcion3, $funcion4];

$teatro=new Teatro("español","arg 123",$coleccionFunciones);
echo $teatro;
echo "ingrese tipo de Funcion: (Obra,Cine,Musical)";
$tipoFuncion=(trim(fgets(STDIN)));
$precio=$teatro->costoPorFuncion($tipoFuncion);
echo "El precio total de la Funcion elegida es: ".$precio;
?>