<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Tú estás logueado.. bienvenido a MarklyBags Módulo Administrativo!, aquí puede ver su profile o hacer Log Out!") }}
                    <br> O puede regresar al Módulo Administrativo
                    <a href="{{ route('productos.index') }}"><img src="{{ asset('assets/images/cerrar-sesion.png') }}" alt="Cerrar Sesión" style="width: 50px; height:55px"></a>
                    <br>
                    <form action="{{url('tokens/create')}}" method="post">
                        @csrf
                        <input type="text" name="token_name" id="" placeholder="Nombre del token">
                        <input type="submit" value="Generar token">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
