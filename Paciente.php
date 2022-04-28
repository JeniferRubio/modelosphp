<?php

namespace App\Model;

class Paciente
{
    Public $nombre = "";
    
    Public $apellido = "";

    Public $dni = "";

    Public $codigo = "";

   public function __construc($nom, $apell, $d, $cod)
    {

      $this->establecerNombre($nom);
      $this->establecerApellido($apell);
      $this->establecerDni($d);
      $this->establecerCodigo($cod);

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
    public function establecerApellido($apell)
    {
       $this->apellido = $apell;
    }

    public function obtenerDni()
    {
      return $this->dni;
    }
    public function establecerDni($d)
    {
       $this->dni = $d;
    }

    public function obtenerCodigo()
    {
      return $this->codigo;
    }
    public function establecerCodigo($cod)
    {
       $this->codigo = $cod;
    }

}