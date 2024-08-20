@include('sweetalert::alert')
<html>
    <body>
    <form action="{{ route('productos.store') }}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre del producto" />
        <input type="text" name="descripcion" placeholder="Descripcion del producto" />
        <input type="number" name="precio" placeholder="Precio del producto" />
        <input type="submit" value="Agregar">
    </form>
    </body>    
</html>    

