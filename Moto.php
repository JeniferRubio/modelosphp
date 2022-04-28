<?php

namespace App\Model;

class Moto
{
    Public $propietario = "";
    
    Public $color = "";

    Public $marca = "";

    public $modelo= "";



    //constructor

   public function __construc($prop, $col, $marc, $mod)
    {

      $this->establecerPropietario($prop);
      $this->establecerColor($col);
      $this->establecerMarca($marc);
      $this->establecerModelo($mod);
   
    }

    //encapsulamiento
   public function obtenerPropietario()
    {
      return $this->propietario;
    }
    public function establecerPropietario($prop)
    {
       $this->propietario = $prop;
    }

    public function obtenerColor()
    {
      return $this->color;
    }
    public function establecerColor($col)
    {
       $this->color = $col;
    }

    public function obtenerMarca()
    {
      return $this->marca;
    }
    public function establecerMarca($marc)
    {
       $this->marca = $marc;
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