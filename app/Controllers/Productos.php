<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        return view('resgistroProductos');
    }

    public function registrar()
    {  //PASO 1:  recibo los datos enviados del formulario
        $producto= $this->request->getPost("producto"); // traigo el valor que llame name="producto" del formulario
        $foto= $this->request->getPost("foto"); // traigo el valor que llame name="foto" del formulario
        $precio= $this->request->getPost("precio"); // traigo el valor que llame name="precio" del formulario
        $descripcion= $this->request->getPost("descripcion"); // traigo el valor que llame name="descripcion" del formulario
        $tipo= $this->request->getPost("tipo"); // traigo el valor que llame name="tipo" del formulario
      // PASO 2: VALIDO QUE LLEGO
      if($this->validate('producto')){  // this operador fecha para acceder al metodo cuando lo uso pongo el nombre de la variable o clase producto
        echo("bien");
      }else {
        
        $mensaje="tienes datos pendientes";
          return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
      }
      //PASO3: crear un arreglo asociativo con los datos anteriores
        $datos=array(
            "producto" =>$producto,
            "foto" => $foto,
            "precio" => $precio,
            "descripcion" => $descripcion,
            "tipo" => $tipo
        );

        print_r($datos);
    }
}





