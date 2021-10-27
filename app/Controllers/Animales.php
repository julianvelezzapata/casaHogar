<?php

namespace App\Controllers;

class Animales extends BaseController
{
    public function index()
    {
        return view('registroAnimales');
    }

    public function ingreso()
    { // PASO 1 : recibo los datos enviados en la pantalla
        $nombre= $this->request->getPost("nombre");
        $foto= $this->request->getPost("foto"); 
        $edad= $this->request->getPost("edad"); 
        $descripcion= $this->request->getPost("descripcion"); 
        $tipo= $this->request->getPost("tipo"); 
        
      // PASO2: vslido que llego
      if ($this->validate('animal')) {
          echo("todo bien");
      }else {
        $mensaje="tienes datos pendientes";
          return redirect()->to(site_url('/productos/ingreso'))->with('mensaje', $mensaje);
      }
      $datos = array (
          "nombre" => $nombre,
          "foto" => $foto,
          "edad" => $edad,
          "descripcion" => $descripcion,
          "tipo" => $tipo,
      );
      print_r($datos);
    }


}
