<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('¡Bienvenido a LuxuryCars!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative border border-gray-300 rounded-md text-center">
                <img src="{{ asset('img/Bienvenidos.jpg') }}" class="w-full h-auto" alt="...">
                <div class="absolute inset-x-0 bottom-0 flex items-center justify-center px-6 sm:px-14 py-8 text-white bg-black bg-opacity-75">
                    <p class="text-lg sm:text-xl font-semibold">
                        En nuestra exclusiva tienda de autos de lujo, te damos la bienvenida a una experiencia única en la búsqueda de tu automóvil soñado. En LuxuryCars, nos enorgullece ofrecer una selección excepcional de vehículos de alta gama que reflejan elegancia, rendimiento y estilo.

                        Desde deportivos de última generación hasta lujosos autos ejecutivos, nuestra colección está cuidadosamente curada para satisfacer los gustos más exigentes. Explora nuestras páginas con tranquilidad y descubre la perfección en cada detalle.

                        Tu cuenta en LuxuryCars te brinda acceso exclusivo a características premium. 
                        Gracias por elegir LuxuryCars. ¡Prepárate para comenzar tu viaje hacia la excelencia automotriz!
                    </p>
                </div>
            </div>

            @include('footer')
        </div>
    </div>
</x-app-layout>
