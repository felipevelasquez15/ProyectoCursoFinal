<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Compras Exitosas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
                <table class="w-full border border-collapse">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="border px-1 py-2">ID_COMPRA</th>
                            <th class="border px-1 py-2">ID_USUARIO</th>
                            <th class="border px-1 py-2">ID_AUTO</th>
                            <th class="border px-2 py-2">FECHA_COMPRA</th>
                            <th class="border px-2 py-2">MARCA</th>
                            <th class="border px-2 py-2">MODELO</th>
                            <th class="border px-1 py-2">AÑO</th>
                            <th class="border px-8 py-2">PRECIO</th>
                            <th class="border px-6 py-2">DESCRIPCION</th>
                            <th class="border px-4 py-2">IMAGEN</th>
                        </tr>  
                    </thead>    
                    <tbody>
                        @foreach ($compras as $compra)
                        <tr>
                            <td class="border-b border-r px-4 py-2">{{$compra->id}}</td>
                            <td class="border-b border-r px-4 py-2">{{$compra->user_id}}</td>
                            <td class="border-b border-r px-4 py-2">{{$compra->auto_id}}</td>
                            <td class="border-b border-r px-4 py-2">{{$compra->created_at}}</td>
                            <td class="border-b border-r px-2 py-2">{{$compra->marca}}</td>
                            <td class="border-b border-r px-2 py-2">{{$compra->modelo}}</td>
                            <td class="border-b border-r px-1 py-2">{{$compra->anio}}</td>
                            <td class="border-b border-r px-4 py-2">{{money($compra->precio)}}</td>
                            <td class="border-b border-r px-6 py-2">{{$compra->descripcion}}</td>
                            <td>
                                <img src="/imagen/{{$compra->auto->imagen}}" width="100%">
                            </td>
                            
                        </tr>
                        @endforeach   
                    </tbody>  
                </table>

                <div>
                    {!! $compras->links() !!}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

