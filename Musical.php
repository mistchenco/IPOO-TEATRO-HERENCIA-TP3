<?php

class Musical extends Funcion{
    private $director;
    private $cantParticipantes;

    public function __construct($nombre, $horaInicio , $duracionObra , $precio, $tipoFuncion, $director , $cantParticipantes)
    {
        parent::__construct($nombre, $horaInicio , $duracionObra , $precio, $tipoFuncion);
        $this->director=$director;
        $this->cantParticipantes=$cantParticipantes;
    }

    public function darCostos()
    {
        $precio= parent::darCostos();
        $precioFinal= $precio+ ($precio*0.12);
        return $precioFinal;
    }
    public function getDirector()
    {
        return $this->director;
    }

    
    public function setDirector($director)
    {
        $this->director = $director;

    }
  
    public function getCantParticipantes()
    {
        return $this->cantParticipantes;
    }

    
    public function setCantParticipantes($cantParticipantes)
    {
        $this->cantParticipantes = $cantParticipantes;

        
    }
  
    public function __toString()
    {
        $cadena=parent::__toString();
        $cadena.= "Director: ".$this->getDirector()."\n
        Cant. Participantes: ".$this->getCantParticipantes()."\n";
        return $cadena;
    }

   
}