@include('componentes.header')
@include('sweetalert::alert')
<h1>Desde el index</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Fecha de creación</th>
        <th>Fecha de actualización</th>
        <th></th>
        <th></th>
    </tr>
    @foreach ($productos as $producto) 
    <tr>
        <form action="{{ route('productos.update', ['id' => $producto->id]) }}" method="POST">
            <td>
                @csrf
                @method("put")
                <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" />
            </td>
            <td>
                <input type="text" name="descripcion" id="descripcion" value="{{ $producto->descripcion }}" />
            </td>
            <td>
                <input type="text" name="precio" id="precio" value="{{ $producto->precio }}" />
            </td>
            <td>{{ $producto->created_at }}</td>
            <td>{{ $producto->updated_at }}</td>
            <td><input type="submit" value="Actualizar"></td>
            <td>
                <a href="{{route('producto.edit', ["id" => $producto->id])}}" target="_blank">Ver registro</a>
            </td>
        </form>
    </tr>
    @endforeach
</table>
@include('componentes.footer')