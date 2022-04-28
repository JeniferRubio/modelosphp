<?php

namespace App\Model;

class Pelicula
{
    Public $nombre = "";
    
    Public $genero = "";

    Public $actorPrincipal = "";

    Public $directorDeRodaje = "";

   public function __construc($nom, $gen, $actor, $direc)
    {

      $this->establecerNombre($nom);
      $this->establecerGenero($gen);
      $this->establecerActorPrincipal($actor);
      $this->establecerDirectorDeRodaje($direc);

    }
   public function obtenerNombre()
    {
      return $this->nombre;
    }
    public function establecerNombre($nom)
    {
       $this->nombre = $nom;
    }

    public function obtenerGenero()
    {
      return $this->genero;
    }
    public function establecerGenero($gen)
    {
       $this->genero = $gen;
    }

    public function obtenerActorPrincipal()
    {
      return $this->actorPrincipal;
    }
    public function establecerActorPrincipal($actor)
    {
       $this->actorPrincipal = $actor;
    }

    public function obtenerDirectorDeRodaje()
    {
      return $this->directorDeRodaje;
    }
    public function establecerDirectorDeRodaje($direc)
    {
       $this->directorDeRodaje = $direc;
    }
}