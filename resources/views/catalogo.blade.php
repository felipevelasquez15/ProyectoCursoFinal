<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogo De Automoviles') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
            @foreach ($autos as $auto)
                <div style='margin-top:5px ; margin-left:5px ;margin-bottom:5px;' class=" max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div style='padding:15px '>
                    <a href="#">
                        <img src="/imagen/{{ $auto->imagen }}" width="500px" id="imagenSeleccionada" class="mx-auto rounded-lg">
                    </a>
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ money($auto->precio) }}</h5>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $auto->marca }} - {{ $auto->modelo }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $auto->descripcion }}</p>
                        <form method="POST" action="{{ route('carritos.store') }}">
                            @csrf
                            <input type="hidden" name="auto_id" value="{{ $auto->id }}">

                            <!-- Otros campos que desees enviar al carrito -->

                            <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Añadir al carrito
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </button>
                        </form>
                    

                        </a>
                    </div>
                    
                </div>
                
            @endforeach
            
        </div>
        @include('footer')
    </div>
    
</div>


</x-app-layout>