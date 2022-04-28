<?php

namespace App\Model;

class Libro
{
    Public $titulo = "";
    
    Public $autor = "";

    Public $editorial = "";

    public $paginas= "";

    public $capitulos= "";

    //constructor

   public function __construc($til, $aut, $edi, $pag, $cap)
    {

      $this->establecerTilulo($til);
      $this->establecerAutor($aut);
      $this->establecerEditorial($edi);
      $this->establecerPaginas($pag);
      $this->establecerPaginas($cap);
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

    public function obtenerEditorial()
    {
      return $this->editorial;
    }
    public function establecerEditorial($edi)
    {
       $this->editorial = $edi;
    }

    public function obtenerPaginas()
    {
      return $this->paginas;
    }
    public function establecerPaginas($pag)
    {
       $this->paginas = $pag;
    }
    
    public function obtenerCapitulos()
    {
      return $this->capitulos;
    }
    public function establecerCapitulos($cap)
    {
       $this->capitulos = $cap;
    }
}