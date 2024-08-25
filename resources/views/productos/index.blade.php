<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administración Markly Bags Tienda OnLine</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>    

@include('componentes.header')
@include('sweetalert::alert')

<body>
<div class="tituloforms1">
    <h1>Listado de Productos</h1>
</div>

<table class="formulario">
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Fecha de creación</th>
        <th>Fecha de actualización</th>
        <th>Ver Producto</th>
        <th></th>
    </tr>
    @foreach ($productos as $producto) 
    <tr>
        <form action="{{ route('productos.update', ['id' => $producto->id]) }}" method="POST">
            <td class="input1">
                @csrf
                @method("put")
                <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" />
            </td>
            <td class="input1">
                <input type="text" name="descripcion" id="descripcion" value="{{ $producto->descripcion }}" />
            </td>
            <td class="input1">
                <input type="text" name="precio" id="precio" value="{{ $producto->precio }}" />
            </td>
            <td class="input1">{{ $producto->created_at }}</td>
            <td class="input1">{{ $producto->updated_at }}</td>
            
            <td>
                <a href="{{route('producto.edit', ["id" => $producto->id])}}" target="_blank">
                    <img src="{{ asset('assets/images/buscar.png') }}" alt="Ver registro" style="width: 40px; height:40px">
                </a>
            </td>
        </form>
    </tr>
    @endforeach
</table>
<div class="divBoton">
    <a href="{{ route('productos.create') }}"><button class="button-s3">Nuevo Producto</button></a>
</div>
</body>

@include('componentes.footer')

</html>