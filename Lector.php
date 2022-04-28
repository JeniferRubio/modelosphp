<?php

namespace App\Model;

class Lector
{
    Public $nombre = "";
    
    Public $apellido = "";

    Public $direccion = "";

    public $telefono= "";

    //constructor

   public function __construc($nom, $apell, $direc, $tel)
    {

      $this->establecerNombre($nom);
      $this->establecerApeliido($apell);
      $this->establecerDireccion($direc);
      $this->establecerTelefono($tel);

    }

    //encapsulamiento
   public function obtenerNombre()
    {
      return $this->nombre;
    }
    public function establecerNombre($nom)
    {
       $this->nombre = $nom;
    }

    public function obtenerApellido()
    {
      return $this->apellido;
    }
    public function establecerApeliido($apell)
    {
       $this->apellido = $apell;
    }

    public function obtenerDireccion()
    {
      return $this->direccion;
    }
    public function establecerDireccion($direc)
    {
       $this->direccion = $direc;
    }

    public function obtenerTelefono()
    {
      return $this->telefono;
    }
    public function establecerTelefono($tel)
    {
       $this->telefono = $tel;
    }

}