@include('sweetalert::alert')
<h1>Editar Registro</h1>

<form action="{{ route('productos.update', ['id' => $producto->id]) }}" method="POST">
    @csrf
    @method('put')
    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}">
    <input type="text" name="descripcion" id="descripcion" value="{{ $producto->descripcion }}" />
    <input type="text" name="precio" id="precio" value="{{ $producto->precio }}" />
    {{ $producto->created_at }}
    {{ $producto->updated_at }}
    <input type="submit" value="Actualizar">
</form>

<h2>Eliminar registro</h2>

<form action="{{route('producto.delete', ['id' => $producto->id])}}" method="post">
    @csrf
    @method("delete")
    <input type="submit" value="Eliminar registro">
</form>