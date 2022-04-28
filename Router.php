<?php

namespace App\Model;

class Router
{
    Public $operador = "";
    
    Public $bandaDeFrecuencia= "";

    Public $numeroDeSerie = "";

    public $modelo= "";



    //constructor

   public function __construc($ope, $frec, $num, $mod)
    {

      $this->establecerOperador($ope);
      $this->establecerBandaDeFrecuencia($frec);
      $this->establecerNumeroDeSerie($num);
      $this->establecerModelo($mod);
   
    }

    //encapsulamiento
   public function obtenerOperador()
    {
      return $this->operador;
    }
    public function establecerOperador($ope)
    {
       $this->operador = $ope;
    }

    public function obtenerBandaDeFrecuencia()
    {
      return $this->BandaDeFrecuencia;
    }
    public function establecerBandaDeFrecuencia($frec)
    {
       $this->bandaDeFrecuencia= $frec;
    }

    public function obtenerNumeroDeSerie()
    {
      return $this->numeroDeSerie;
    }
    public function establecerNumeroDeSerie($num)
    {
       $this->numeroDeSerie = $num;
    }

    public function obtenerModelo()
    {
      return $this->modelo;
    }
    public function establecerModelo($mod)
    {
       $this->modelo = $mod;
    }
    
    
}