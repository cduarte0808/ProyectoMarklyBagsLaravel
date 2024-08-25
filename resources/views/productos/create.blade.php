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
    <h1>Crear un nuevo Producto</h1>
</div>
    <main>

        <div class="formulario3">
        <form action="{{ route('productos.store') }}" method="post">
            @csrf
            <label class="labelf" for="nombre">Nombre del producto:</label><br>
            <input class="input1" type="text" name="nombre" placeholder="Nombre del producto" required />
            <label class="labelf" for="descripcion">Descripción del producto:</label><br>
            <input class="input1" type="text" name="descripcion" placeholder="Descripción del producto" />
            <label class="labelf" for="precio">Precio del producto:</label><br>
            <input class="input1" type="number" name="precio" placeholder="Precio del producto" required />
            <button class="buttonf" type="submit">Agregar</button>
        </form>
        </div>
    </main>    
</body>

@include('componentes.footer')

</html>    

