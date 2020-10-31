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

@section('nav-inicio')
    <nav>

    </nav>

@endsection



@section('img-inicio')
    <div class="frutas-inicio">
    <h3> Banano</h3>
<img src="{{asset('fotos/banano.JPG')}}">
        <p> Botánicamente una baya, de varios tipos de grandes plantas herbáceas del género Musa</p>

        <h3> Uvas</h3>
<img src="{{asset('fotos/uvas.JPG')}}">
        <p> La uva es la común denominación que reciben los frutos formados en los racimos de la vid</p>

        <h3> Fresas</h3>
<img src="{{asset('fotos/fresas.JPG')}}">
        <p> Fragaria, llamado comúnmente fresa o frutilla, es un género de plantas rastreras estoloníferas de la familia Rosaceae</p>

        <h3> Mora</h3>
<img src="{{asset('fotos/mora.JPG')}}">
        <p> Las moras son frutas o bayas que, a pesar de proceder de especies vegetales que son completamente diferentes, poseen aspecto similar y características comunes. </p>

        <h3> Papaya</h3>
<img src="{{asset('fotos/papaya.JPG')}}">
        <p>Carica papaya es una fruta muy rica arbustiva del género Carica en la familia Caricaceae</p>

        <h3> Mango</h3>
<img src="{{asset('fotos/mango.JPG')}}">
        <p> El mango es el nombre de las frutas de varias especies de árboles del género Mangifera, especialmente de Mangifera indica, y sus numerosos cultivares.</p>

        <h3> Naranja</h3>
<img src="{{asset('fotos/naranja.JPG')}}">
        <p> La naranja es una fruta cítrica obtenida del naranjo dulce, del naranjo amargo y de naranjos de otras variedades o híbridos, de origen asiático</p>

    </div>
@endsection



</body>




</html>

