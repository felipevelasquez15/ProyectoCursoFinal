<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Automoviles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            <a type="button" href="{{ route('autos.create') }}" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Agregar</a>
            
            <table >
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-8 py-2">MARCA</th>
                        <th class="border px-4 py-2">MODELO</th>
                        <th class="border px-4 py-2">AÑO</th>
                        <th class="border px-8 py-2">PRECIO</th>
                        <th class="border px-20 py-2">DESCRIPCION</th>
                        <th class="border px-4 py-2">IMAGEN</th>
                        <th class="border px-4 py-2">ACCIONES</th>
                    </tr>  
                </thead>    
                <tbody>
                    @foreach ($autos as $auto)
                    <tr>
                        <td class="border-b border-r">{{$auto->id}}</td>
                        <td class="border-b border-r">{{$auto->marca}}</td>
                        <td class="border-b border-r">{{$auto->modelo}}</td>
                        <td class="border-b border-r">{{$auto->anio}}</td>
                        <td class="border-b border-r">{{ money($auto->precio) }}</td>
                        <td class="border-b border-r">{{$auto->descripcion}}</td>
                     
                        <td>
                            <img src="/imagen/{{$auto->imagen}}" width="100%">
                        </td>                        
                        <td >
                            <div class="flex justify-center " >
                                <!-- botón editar -->
                                <a href="{{ route('autos.edit', $auto->id) }}" class="rounded bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4">Editar</a>

                                <!-- botón borrar -->
                                <form action="{{ route('autos.destroy', $auto->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach   
                </tbody>  
                     
            </table>

            <div>
                    {!! $autos->links() !!}
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