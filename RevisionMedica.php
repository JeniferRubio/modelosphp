<?php

namespace App\Model;

class RevisionMedica
{
    Public $paciente = "";
    
    Public $fecha = "";

    Public $hora = "";

    public $codigo= "";

    //constructor

   public function __construc($pac, $fec, $h, $cod)
    {

      $this->establecerPaciente($pac);
      $this->establecerFecha($fec);
      $this->establecerHora($h);
      $this->establecerCodigo($cod);

    }

    //encapsulamiento
   public function obtenerPaciente()
    {
      return $this->paciente;
    }
    public function establecerPaciente($pac)
    {
       $this->paciente = $pac;
    }

    public function obtenerFecha()
    {
      return $this->fecha;
    }
    public function establecerFecha($fec)
    {
       $this->fecha = $fec;
    }

    public function obtenerHora()
    {
      return $this->hora;
    }
    public function establecerHora($h)
    {
       $this->hora = $h;
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