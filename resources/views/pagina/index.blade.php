@extends('layouts.app')

<html>

<head>
    <link rel="stylesheet" href="{{asset('css/diseno.css')}}"/>
    <title> Fruteria </title>
    <meta charset="UTF-8">

</head>

@section('titulo-inicio')

    <h1> Frutería </h1>
@endsection()


@section('nav-inicio')
    <nav>

    </nav>

@endsection


<body>
@section('img-inicio')
    <div class="frutas-inicio">
    <h3> Banano</h3>
<img src="{{asset('fotos/banano.JPG')}}">
        <p> Botánicamente una baya, de varios tipos de grandes plantas herbáceas del género Musa</p>

        <h3> Uvas</h3>
<img src="{{asset('fotos/uvas.JPG')}}">
        <p> Botánicamente una baya, de varios tipos de grandes plantas herbáceas del género Musa</p>

        <h3> Fresas</h3>
<img src="{{asset('fotos/fresas.JPG')}}">

        <h3> Mora</h3>
<img src="{{asset('fotos/mora.JPG')}}">
        <p> Botánicamente una baya, de varios tipos de grandes plantas herbáceas del género Musa</p>

        <h3> Papaya</h3>
<img src="{{asset('fotos/papaya.JPG')}}">
        <p> Botánicamente una baya, de varios tipos de grandes plantas herbáceas del género Musa</p>

        <h3> Mango</h3>
<img src="{{asset('fotos/mango.JPG')}}">
        <p> Botánicamente una baya, de varios tipos de grandes plantas herbáceas del género Musa</p>

        <h3> Naranja</h3>
<img src="{{asset('fotos/naranja.JPG')}}">
        <p> Botánicamente una baya, de varios tipos de grandes plantas herbáceas del género Musa</p>

    </div>
@endsection






</body>




</html>

