<?php
/**
 * PERCEVAL MISTCHENCO, AUGUSTO
 * FAI-3085
 */
class Funcion{
 
 //atributos
    private $nombre;
     private $horaInicio;
    private $duracionObra;
    private $precio;
    private $tipoFuncion;
//metodos

public function __construct($nombre, $horaInicio , $duracionObra , $precio, $tipoFuncion){
    $this->nombre=$nombre;
    $this->horaInicio=$horaInicio;
    $this->duracionObra=$duracionObra;
    $this->precio=$precio;
    $this->tipoFuncion=$tipoFuncion;
}

public function getNombre(){
    return $this->nombre;

}

public function getHoraInicio(){
    return $this->horaInicio;
}

public function getDuracion(){
    return $this->duracionObra;
}

public function getPrecio(){
    return $this->precio;
}

public function setNombre($nombre){
    $this->nombre=$nombre;
}
public function setHoraInicio($horaInicio){
    $this->horaInicio=$horaInicio;
}

public function setDuracion($duracionObra){
    $this->duracionObra=$duracionObra;
}
public function setPrecio($precio){
    $this->precio=$precio;
}

public function cambiarNombre($nombreNuevo){
    $this->setNombre($nombreNuevo);
}

public function cambiarPrecio($precio){
    $this->setPrecio($precio);
}

public function getTipoFuncion()
{
    return $this->tipoFuncion;
}


public function setTipoFuncion($tipoFuncion)
{
    $this->tipoFuncion = $tipoFuncion;
 }


public function darCostos()
{
    $precio=$this->getPrecio();
    return $precio;
}

public function __toString()
{
    return "nombre: ".$this->getNombre()."\n
            hora inicio: ".$this->getHoraInicio()."\n
            Duracion: ".$this->getDuracion()."\n
            precio: ".$this->getPrecio()."\n
            tipo: ".$this->getTipoFuncion()."\n";
}

   
 
}