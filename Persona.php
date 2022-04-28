<?php

namespace App\Model;

class Persona
{
    Public $nombre = "";
    
    Public $apellido = "";

    Public $genero = "";

    public $edad= "";

   public function __construc($nom, $apell, $gen, $años)
    {

      $this->establecerNombre($nom);
      $this->establecerApeliido($apell);
      $this->establecerGenero($gen);
      $this->establecerEdad($años);
    }
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
    public function obtenerGenero()
    {
      return $this->genero;
    }
    public function establecerGenero($gen)
    {
       $this->genero = $gen;
    }

    public function obtenerEdad()
    {
      return $this->edad;
    }
    public function establecerEdad($años)
    {
       $this->edad = $años;
    }


}