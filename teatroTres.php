<?php

class Teatro{
    private $nombreTeatro;
    private $direccionTeatro;
private $colFunciones=array();

public function __construct($nombreTeatro, $direccionTeatro, $colFunciones)
{
    $this->nombreTeatro=$nombreTeatro;
    $this->direccionTeatro=$direccionTeatro;
    $this->colFunciones=$colFunciones;
}

public function setNombreTeatro($nombreTeatro){
    $this->nombreTeatro=$nombreTeatro;
}

public function setDireccionTeatro($direccionTeatro){
    $this->direccionTeatro=$direccionTeatro;
}


public function getNombreTeatro(){
    return $this->nombreTeatro;
}

public function getDireccionTeatro(){
    return $this->direccionTeatro;
}

public function getColFunciones()
{
return $this->colFunciones;
}


public function setColFunciones($colFunciones)
{
$this->colFunciones = $colFunciones;
}


/**
 * funcion que implemento desde el test, la cual se encarga de armar mi coleccion de funciones
 */
public function cargarFuncion($nombre, $horaInicio , $duracionObra , $precio, $tipoFuncion){
    
    $colfuncion=$this->getColFunciones();
    $cantidad=count($colfuncion);
    $carga=false;
    $verificar=false;
    //Si la cantidad de elementos de mi arreglo es 0 no verifico el horario y creo el objeto funcion en la posicion 0 y seteo el valor
    if($cantidad==0){
        $funcion= new Funcion($nombre, $horaInicio, $duracionObra, $precio, $tipoFuncion);
        $colfuncion[0]=$funcion;
        $this->setColFunciones($colfuncion);
        $carga=true;
        
    }else{
    //si cuento con un elemento verifico el horario, me retorna un boleeano
    $verificar=$this->verificarHorario($horaInicio,$duracionObra);
    }
    
    //si es true cargo una nueva funcion sobre la ultima posicion de la coleccion de funciones
    if($verificar){
        
       $colfuncion=$this->getObrasTeatro();
        $funcion= new Funcion($nombre, $horaInicio, $duracionObra, $precio,$tipoFuncion);
        array_push($colfuncion, $funcion);
        $this->setObrasTeatro($colfuncion);
        $carga=true;
    }
    
   return $carga;
}
/**
 * verifico el horario cargado en la coleccion de funciones (no pude lograr recorrer el arreglo completo para ver los horarios ya cargados, 
 * necesito una ayuda en ese tema) compara siempre en la ultima funcion el horario
 */
    public function verificarHorario($horafuncionNueva,$duracionObraNueva){
        $sepuede=false;
        $coleccion=$this->getColFunciones();//
        //cuento la cantidad de elementos y recorro la coleccion
        for ($i=0; $i <count($coleccion) ; $i++) { 
            $horaInicio=$coleccion[$i]->getHoraInicio();//traigo el valor del atributo
            $horaFin=$horaInicio+$coleccion[$i]->getDuracion();
            $horaFinfuncionNueva=$horafuncionNueva+$duracionObraNueva;//no realizo conversion de horas y minutos ya que no lo requeria el enunciado
      
        }
        if(($horaFinfuncionNueva <= $horaInicio)||($horafuncionNueva>$horaFin)){//condicional que me ayudo la profe viviana
            $sepuede=true;
        }
        
       
    return $sepuede;       
    }

public function costoPorFuncion($tipoFuncion){
    $coleccion=$this->getColFunciones();
    $costo=0;
foreach ($coleccion as $objFuncion) {
    $tipo=$objFuncion->getTipoFuncion();
    
    if($tipo==$tipoFuncion){
        $costo=$costo+($objFuncion->darCostos());
               
    }
}
return $costo;
}

public function mostrarColeccion($coleccion)
{
    $arregloStr = "";
    $array = $coleccion;
    $contador = count($array);
    for ($i = 0; $i < $contador; $i++) {
        $arregloStr .= $array[$i] . "\n";
        $arregloStr .= "---------------\n";
    }
    return $arregloStr;
}

public  function __toString()
{
 $coleccion=$this->getColFunciones();
 return "Nombre Teatro".$this->getNombreTeatro()."\n
        Direccion Teatro".$this->getDireccionTeatro()."\
        Funciones: ".$this->mostrarColeccion($coleccion)."\n";
}



}