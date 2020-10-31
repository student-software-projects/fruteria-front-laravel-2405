@extends('layouts.app')

<html>

<head>
    <link rel="stylesheet" href="{{asset('css/diseno.css')}}"/>
    <title> Fruteria </title>
    <meta charset="UTF-8">

</head>

<body>

@section('titulo-inicio')

    <h1> Frutería </h1>
@endsection()


@section('nav-inicio')
    <nav>
        <a href="{{route('pagina.index')}}">Inicio</a>
        <a href="{{route('pagina.domicilios')}}">Domicilios</a>
        <a href="{{route('pagina.acercade')}}">Acerca De</a>
        <a href="https://www.google.com/maps/place/Carnes+Y+Fruver+Sky/@4.5150793,-74.1183463,19z/data=!4m5!3m4!1s0x8e3fa22ecbf6f943:0xd0b71f12e2ae2469!8m2!3d4.5147537!4d-74.1178156?hl=es">Contacto</a>
    </nav>


@endsection


@section('mision-vision')
<div class="mision">
    <h2> Misión</h2>

    <p>
        Nuestra misión es satisfacer las necesidades de todos nuestros clientes y
        partner así como también de nuestros  trabajadores, con el objetivo de maximizar la eficiencia y
        optimizar la rentabilidad a través de nuestra  diferenciación en calidad de producto, servicio y precio.
    </p>

    <h2> Visión</h2>

    <p>
        Nuestra visión es conseguir la fidelización de nuestros clientes a través de comercialización de
        productos de calidad, a partir de la cual afianzar un crecimiento progresivo y sostenido en el mercado nacional
        y europeo consolidando nuestra posición como empresa de referencia en el sector con una imagen
        corporativa propia y diferenciada de sus competidores. Frutas Terrados trabaja para
        conseguir la máxima calidad, un catálogo de productos diversificado
        y el mejor servicio al precio más competitivo.
    </p>
</div>

@endsection

@section('administrador')
    <div class="admin">
  <small> Juan Sebastian Ruiz</small>
    <small> sebasruiz97@gmail.com</small>
  <small> 3115133173</small>
    </div>
@endsection

</body>




</html>
