<?php

namespace App\Model;

class Reservacion
{
    Public $cliente = "";
    
    Public $fecha = "";

    Public $hora = "";

    public $valorDePago= "";

    //constructor

   public function __construc($cli, $fec, $h, $valor)
    {

      $this->establecerCliente($cli);
      $this->establecerFecha($fec);
      $this->establecerHora($h);
      $this->establecerValorDePago($valor);

    }

    //encapsulamiento
   public function obtenerCliente()
    {
      return $this->cliente;
    }
    public function establecerCliente($cli)
    {
       $this->cliente = $cli;
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

    public function obtenerValorDePago()
    {
      return $this->valorDePago;
    }
    public function establecerValorDePago($valor)
    {
       $this->valorDePago = $valor;
    }

}