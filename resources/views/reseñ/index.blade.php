
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reseñas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <a type="button" href="{{ route('resenas.create') }}" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Crear una nueva reseña</a>
            
                <table class="w-full border border-collapse">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="border px-4 py-2">ID</th>
                            <th class="border px-4 py-2">ID_USUARIO</th>
                            <th class="border px-4 py-2">FECHA_CREACION</th>
                            <th class="border px-4 py-2">NOMBRE</th>
                            <th class="border px-4 py-2">CORREO</th>
                            <th class="border px-8 py-2">ASUNTO</th>
                            <th class="border px-4 py-2">DESCRIPCION</th>
                            <th class="border px-4 py-2">ACCIONES</th>
                        </tr>  
                    </thead>    
                    <tbody>
                        @foreach ($resenas as $resena)
                        <tr>
                            <td class="border-b border-r px-4 py-2">{{$resena->id}}</td>
                            <td class="border-b border-r px-4 py-2">{{$resena->user_id}}</td>
                            <td class="border-b border-r px-4 py-2">{{$resena->created_at}}</td>
                            <td class="border-b border-r px-4 py-2">{{$resena->user->name}}</td>
                            <td class="border-b border-r px-4 py-2">{{$resena->user->email}}</td>
                            <td class="border-b border-r px-8 py-2">{{$resena->asunto}}</td>
                            <td class="border-b border-r px-4 py-2">{{$resena->descripcion}}</td>
                            <td class="border-b px-4 py-2">
                                @if (auth()->user()->id == $resena->user_id)
                                    <div class="flex justify-center space-x-2">
                                        <!-- botón editar -->
                                        <a href="{{ route('resenas.edit', $resena->id) }}" class="rounded bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4">Editar</a>

                                        <!-- botón borrar -->
                                        <form action="{{ route('resenas.destroy', $resena->id) }}" method="POST" class="formEliminar">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="rounded bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4">Eliminar</button>
                                        </form>
                                    </div>
                                @endif
                            </td>
                        </tr>
                        @endforeach   
                    </tbody>  
                </table>

                <div>
                    {!! $resenas->links() !!}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<script>
    (function () {
  'use strict'
  //debemos crear la clase formEliminar dentro del form del boton borrar
  //recordar que cada registro a eliminar esta contenido en un form  
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {        
          event.preventDefault()
          event.stopPropagation()        
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
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })                      
      }, false)
    })
})()
</script>