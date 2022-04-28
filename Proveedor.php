<?php

namespace App\Model;

class Proveedor
{
    Public $nombre = "";
    
    Public $direccion = "";

    Public $ruc = "";

    public $telefono= "";

    //constructor

   public function __construc($nom, $direc, $r, $tel)
    {

      $this->establecerNombre($nom);
      $this->establecerDireccion($direc);
      $this->establecerRuc($r);
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

    public function obtenerDireccion()
    {
      return $this->direccion;
    }
    public function establecerDireccion($direc)
    {
       $this->direccion = $direc;
    }

    public function obtenerRuc()
    {
      return $this->ruc;
    }
    public function establecerRuc($r)
    {
       $this->ruc = $r;
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