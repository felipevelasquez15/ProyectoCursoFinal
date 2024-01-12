<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</head>



<body>

@include('navbar')

            <div id="controls-carousel" class=" p-10 relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
              <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                  <!-- Item 1 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="{{ asset('img/d2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                  </div>
                  <!-- Item 2 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                      <img src="{{ asset('img/d3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                  </div>
                  <!-- Item 3 -->
                  <div class="hidden duration-700 ease-in-out" data-carousel-item>
                      <img src="{{ asset('img/d4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                  
              </div>
              <!-- Slider controls -->
              <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                      </svg>
                      <span class="sr-only">Previous</span>
                  </span>
              </button>
              <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                      <span class="sr-only">Next</span>
                  </span>
              </button>
          </div>

          <h2 class="mt-8 mb-8 ml-10 text-2xl font-semibold">CATEGORIAS</h2>

  <div class="flex space-x-6 mt-10 mr-10 ml-10 mb-10">
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <img class="rounded-md" src="{{ asset('img/c9.jpg') }}" > 
    <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Autos Deportivos</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Diseñados para emocionar, combinan potencia, elegancia y rendimiento.</p>
        @auth
            <a href="{{ route('catalogo') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Ver mas
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        @else
            <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                ver mas
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        @endauth
    </div>

    <!-- Repite el bloque anterior tres veces más para tener un total de cuatro tarjetas -->

    <!-- Tarjeta 2 -->
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <img class="rounded-md" src="{{ asset('img/c2.jpg') }}" >
    <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Autos Eléctricos</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Potentes, eficientes y sin emisiones, fusionan estilo contemporáneo con un compromiso ecoamigable.</p>
        @auth
            <a href="{{ route('catalogo') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Ver mas
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        @else
            <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                ver mas
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        @endauth
    </div>

    <!-- Tarjeta 3 -->
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <img class="rounded-md" src="{{ asset('img/c3.jpg') }}" >
    <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Camionetas</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Fusionando potencia y elegancia, ofrecen una experiencia de conducción incomparable.</p>
        @auth
            <a href="{{ route('catalogo') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Ver mas
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        @else
            <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                ver mas
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        @endauth
    </div>

    <!-- Tarjeta 4 -->
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <img class="rounded-md" src="{{ asset('img/c4.jpg') }}" >
    <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Híbridos</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ofrecen un rendimiento excepcional con motores duales, comodidades y nuevas tecnologías.</p>
        @auth
            <a href="{{ route('catalogo') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Ver mas
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        @else
            <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                ver mas
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        @endauth
    </div>
</div>

<div class="container mx-auto">
    <h2 class="mt-8 mb-8 ml-8 text-2xl font-semibold">MARCAS</h2>

    <div class="mr-10 ml-10 mb-10 flex gap-1 justify-center">
    <div class="flex-none w-1/6">
        <img src="{{ asset('img/m1.png') }}" class="w-full h-auto border border-gray-300 rounded-md" alt="Marca 1">
    </div>
    <div class="flex-none w-1/6">
        <img src="{{ asset('img/m2.png') }}" class="w-full h-auto border border-gray-300 rounded-md" alt="Marca 2">
    </div>
    <div class="flex-none w-1/6">
        <img src="{{ asset('img/m3.png') }}" class="w-full h-auto border border-gray-300 rounded-md" alt="Marca 3">
    </div>
    <div class="flex-none w-1/6">
        <img src="{{ asset('img/m4.png') }}" class="w-full h-auto border border-gray-300 rounded-md" alt="Marca 4">
    </div>
    <div class="flex-none w-1/6">
        <img src="{{ asset('img/m5.png') }}" class="w-full h-auto border border-gray-300 rounded-md" alt="Marca 5">
    </div>
    <div class="flex-none w-1/6">
        <img src="{{ asset('img/m6.png') }}" class="w-full h-auto border border-gray-300 rounded-md" alt="Marca 6">
    </div>
</div>

@include('footer')

            </div>
        </div>
    </div>
  
</body>
</html>

