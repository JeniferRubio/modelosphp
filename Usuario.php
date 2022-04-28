<?php

namespace App\Model;

class Usuario
{
    Public $nombre = "";
    
    Public $email = "";

    Public $password = "";

   public function __construc($nom, $correo, $contra)
    {

      $this->establecerNombre($nom);
      $this->establecerEmail($correo);
      $this->establecerPassword($contra);

    }
   public function obtenerNombre()
    {
      return $this->nombre;
    }
    public function establecerNombre($nom)
    {
       $this->nombre = $nom;
    }

    public function obtenerEmail()
    {
      return $this->email;
    }
    public function establecerEmail($correo)
    {
       $this->email = $correo;
    }

    public function obtenerPassword()
    {
      return $this->password;
    }
    public function establecerPassword($contra)
    {
       $this->nombre = $contra;
    }

}

