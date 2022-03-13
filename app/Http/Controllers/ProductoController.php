<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function mostrar(){

        $products=['javon','Papel higienico','Detergente','Cepillo'];
        $proveedores=['A','B','C','D'];
        //  return view("./products/index")
        //  ->with('products',$products)
        //  ->with('proveedores',$proveedores);
        //  return view("./products/index",compact('products'));
          return view("./products/index",compact('products','proveedores'));

       //  return 'desde el controlador';
    }
}
