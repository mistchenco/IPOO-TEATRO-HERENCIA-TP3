<?php

class Cine extends Funcion{
    private $genero;
    private $pais;

    public function __construct($nombre, $horaInicio , $duracionObra , $precio , $tipoFuncion, $genero , $pais)
    {
        parent::__construct($nombre, $horaInicio , $duracionObra , $precio, $tipoFuncion);
        $this->genero=$genero;
        $this->pais=$pais;
    }
    public function getGenero()
    {
        return $this->genero;
    }

  
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
    
    public function getPais()
    {
        return $this->pais;
    }

   
    public function setPais($pais)
    {
        $this->pais = $pais;
    }    
    
    public function darCostos()
{
    $precio= parent::darCostos();
    $precioFinal= $precio+ ($precio*0.65);
    return $precioFinal;
}
    public function __toString()
    {
        $cadena=parent::__toString();
        $cadena.= "Genero".$this->getGenero()."\n
        Pais".$this->getPais()."\n";
        return $cadena;

    }

}