<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Carrito') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
                <table class="w-full border border-collapse">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="border px-2 py-2">ID_COMPRA</th>
                            <th class="border px-2 py-2">ID_USUARIO</th>
                            <th class="border px-2 py-2">ID_AUTO</th>
                            <th class="border px-2 py-2">FECHA_COMPRA</th>
                            <th class="border px-8 py-2">IMAGEN</th>
                            <th class="border px-2 py-2">MARCA</th>
                            <th class="border px-2 py-2">MODELO</th>
                            <th class="border px-4 py-2">PRECIO</th>
                            <th class="border px-4 py-2">ACCIONES</th>
                        </tr>  
                    </thead>    
                    <tbody>
                        @foreach ($carritos as $carrito)
                            @if ($carrito->user_id == auth()->user()->id)
                                <tr>
                                    <td class="border-b border-r px-4 py-2">{{$carrito->id}}</td>
                                    <td class="border-b border-r px-4 py-2">{{$carrito->user_id}}</td>
                                    <td class="border-b border-r px-4 py-2">{{$carrito->auto_id}}</td>
                                    <td class="border-b border-r px-2 py-2">{{$carrito->created_at}}</td>
                                    <td>
                                        <img src="/imagen/{{$carrito->auto->imagen}}" width="100%">
                                    </td>
                                    <td class="border-b border-r px-4 py-2">{{$carrito->auto->marca}}</td>
                                    <td class="border-b border-r px-2 py-2">{{$carrito->auto->modelo}}</td>
                                    <td class="border-b border-r px-8 py-2">{{money($carrito->auto->precio)}}</td>
                                    <td class="border-b px-4 py-2">
                                        <div class="flex justify-center space-x-2">
                                            <!-- botón editar -->
                                            <form action="{{ route('carritos.comprar', $carrito->id) }}" method="POST" class="formComprar">
                                                @csrf
                                                <button type="submit" class="rounded bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4">Comprar</button>
                                            </form>
                                            <!-- botón borrar -->
                                            <form action="{{ route('carritos.destroy', $carrito->id) }}" method="POST" class="formEliminar">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="rounded bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4">Eliminar</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach   
                    </tbody>  
                </table>

                <div>
                    {!! $carritos->links() !!}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>


<script>
    (function () {
        'use strict';

        // Selecciona los formularios con la clase formEliminar
        var formsEliminar = document.querySelectorAll('.formEliminar');
        Array.prototype.slice.call(formsEliminar)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    event.stopPropagation();

                    Swal.fire({
                        title: '¿Confirma la eliminación del registro?',
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonColor: '#20c997',
                        cancelButtonColor: '#6c757d',
                        confirmButtonText: 'Confirmar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                            Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.', 'success');
                        }
                    });
                }, false);
            });

        // Script para mostrar mensaje de compra
        var formsComprar = document.querySelectorAll('.formComprar');
            Array.prototype.slice.call(formsComprar)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        event.preventDefault();
                        event.stopPropagation();

                        Swal.fire({
                            title: '¡Compra exitosa!',
                            text: 'La compra se ha realizado con éxito.',
                            icon: 'success',
                            confirmButtonColor: '#20c997'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                this.submit();
                            }
                        });
                    }, false);
                });
        })();
</script>
