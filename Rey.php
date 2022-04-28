<?php

namespace App\Model;

class Rey
{
    Public $nombre = "";
    
    Public $pais = "";

    Public $padres = "";

    public $edad= "";

   public function __construc($nom, $pai, $pad, $años)
    {

      $this->establecerNombre($nom);
      $this->establecerPais($pai);
      $this->establecerPadres($pad);
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

    public function obtenerPais()
    {
      return $this->pais;
    }
    public function establecerPais($pai)
    {
       $this->pais = $pai;
    }
    public function obtenerPadres()
    {
      return $this->padres;
    }
    public function establecerPadres($pad)
    {
       $this->padres = $pad;
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