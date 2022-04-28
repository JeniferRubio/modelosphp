<?php

namespace App\Model;

class Revista
{
    Public $titulo = "";
    
    Public $autor = "";

    Public $edicion = "";

    public $tipoDeRevista= "";


    //constructor

   public function __construc($til, $aut, $edi, $tipo)
    {

      $this->establecerTilulo($til);
      $this->establecerAutor($aut);
      $this->establecerEdicion($edi);
      $this->establecerTipoDeRevista($tipo);
      
    }

    //encapsulamiento
   public function obtenerTitulo()
    {
      return $this->titulo;
    }
    public function establecerTilulo($til)
    {
       $this->titulo = $til;
    }

    public function obtenerAutor()
    {
      return $this->autor;
    }
    public function establecerAutor($aut)
    {
       $this->autor = $aut;
    }

    public function obtenerEdicion()
    {
      return $this->edicion;
    }
    public function establecerEdicion($edi)
    {
       $this->edicion = $edi;
    }

    public function obtenerTipoDeRevista()
    {
      return $this->tipoDeRevista;
    }
    public function establecerTipoDeRevista($tipo)
    {
       $this->tipoDeRevista = $tipo;
    }
    

}