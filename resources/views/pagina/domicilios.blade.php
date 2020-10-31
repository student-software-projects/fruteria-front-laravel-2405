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

@section('domicilios')
<div class="domicilios">

<h2> Domicilios</h2>

<h3> Domicilios a la Zona Sur</h3>
    <p>Precio: $5000</p>
    <p> Domingo a Domingo 8am a 8pm</p>


<h3> Domicilios a la Zona Centro</h3>
<p>Precio: $7000</p>
<p> Domingo a Domingo 8am a 8pm</p>


<h3> Domicilios a la Zona Norte</h3>
<p> Precio: $10000</p>
<p> Domingo a Domingo 8am a 8pm</p>


<h3> Domicilios a la Zona Occidente</h3>
<p> Precio: $7000</p>
<p> Domingo a Domingo 8am a 8pm</p>

    <h3> Domicilios a la Zona Oriente</h3>
    <p> Precio: $6000</p>
    <p> Domingo a Domingo 8am a 8pm</p>


</div>
@endsection()

</body>
</html>
