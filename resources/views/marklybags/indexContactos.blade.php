<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Markly Bags Tienda OnLine - Listado de Contactos</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>    

@include('componentes.header')
@include('sweetalert::alert')

<body>
<div class="tituloforms1">
    <h1>Listado de Contactos</h1>
</div>

<table class="formulario">
    <tr>
        <th>Nombre Completo</th>
        <th>Correo electrónico</th>
        <th>Número de Contacto</th>
        <th>Asunto</th>
        <th>Mensaje</th>
        <th>Fecha de creación</th>
    </tr>
    @foreach ($contactos as $contacto) 
    <tr>
        <form action="" method="POST">
            <td class="input1">
                @csrf
                @method("put")
                {{ $contacto->nombre_completo }}
            </td>
            <td class="input1">{{ $contacto->correo_electronico }}</td>
            <td class="input1">{{ $contacto->numero_contacto }}</td>
            <td class="input1">{{ $contacto->asunto}}</td>
            <td class="input1">{{ $contacto->mensaje}}</td>
            <td class="input1">{{ $contacto->created_at }}</td>
        </form>
    </tr>
    @endforeach
</table>
<div class="divBoton">
    <a href="{{ route('marklybags.contacto') }}"><img src="{{ asset('assets/images/cerrar-sesion.png') }}" alt="Cerrar Sesión" style="width: 50px; height:55px"></a>
</div>
</body>

@include('componentes.footer')

</html>