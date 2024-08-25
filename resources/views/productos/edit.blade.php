<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Productos - Markly Bags Tienda OnLine</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>    

@include('componentes.header')
@include('sweetalert::alert')

<body>
<div class="tituloforms1">
    <h1>Actualizar o Eliminar un Producto</h1>
</div>
    <main>

        <div class="formulario4">
        <form action="{{ route('productos.update', ['id' => $producto->id]) }}" method="post">
            @csrf
            @method('put')
            <label class="labelf" for="nombre">Nombre del producto:</label><br>
            <input class="input1" type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" />
            <label class="labelf" for="descripcion">Descripción del producto:</label><br>
            <input class="input1" type="text" name="descripcion" id="descripcion" value="{{ $producto->descripcion }}" />
            <label class="labelf" for="precio">Precio del producto:</label><br>
            <input class="input1" type="number" name="precio" id="precio" value="{{ $producto->precio }}" />
            <label class="labelf" for="fechacreacion">Fecha de Creación del producto: </label>
            {{ $producto->created_at }}<br><br>
            <label class="labelf" for="fechaactualiza">Fecha de Actualización del producto:</label>
            {{ $producto->updated_at }}<br><br>
            <button class="buttonf" type="submit">Actualizar</button>
        </form>
        <form action="{{route('producto.delete', ['id' => $producto->id])}}" method="post">
            @csrf
            @method("delete")
            <button class="buttonf" type="submit">Eliminar registro</button>
        </form>
        </div>
    </main>    
</body>

@include('componentes.footer')

</html>