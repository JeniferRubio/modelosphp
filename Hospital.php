<?php

namespace App\Model;

class Hospital
{
    Public $nombre = "";
    
    Public $ubicacion = "";

    Public $director = "";

    public $telefono= "";

    //constructor

   public function __construc($nom, $ubi, $direc, $tel)
    {

      $this->establecerNombre($nom);
      $this->establecerUbicacion($ubi);
      $this->establecerDirector($direc);
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

    public function obtenerUbicacion()
    {
      return $this->ubicacion;
    }
    public function establecerUbicacion($ubi)
    {
       $this->ubicacion = $ubi;
    }

    public function obtenerDirector()
    {
      return $this->director;
    }
    public function establecerDirector($direc)
    {
       $this->director = $direc;
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