<?php
/**
 * PERCEVAL MISTCHENCO, AUGUSTO
 * FAI-3085
 */
class obraTeatro extends Funcion{
 

public function __construct($nombre, $horaInicio , $duracionObra , $precio, $tipoFuncion){

parent::__construct($nombre, $horaInicio , $duracionObra , $precio, $tipoFuncion);
}


public function darCostos()
{
    $precio= parent::darCostos();
    $precioFinal= $precio+ ($precio*0.45);
    return $precioFinal;
}

}
?>