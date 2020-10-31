<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagina extends Controller
{

public  function  index(){

    return view('pagina.index');
}


    public  function  servicios(){

        return view('pagina.servicios');
    }


    public  function  acercade(){

        return view('pagina.acercade');
    }


    public  function  contacto(){

        return view('pagina.contacto');
    }


}
