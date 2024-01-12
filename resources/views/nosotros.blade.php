<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</head>
<body>
@include('navbar')
                <div class="relative p-6 border border-gray-300 rounded-md">
                    <img src="{{ asset('img/nosotros.jpg') }}" class="w-full h-auto" alt="...">
                    <div class="absolute bottom-0 left-0 px-6 sm:px-14 py-8 text-white">
                        <p class="text-lg sm:text-xl font-semibold">
                            "Explora el lujo automotriz con nosotros. Innovación, elegancia y rendimiento se unen en cada vehículo. Descubre la experiencia única de conducir nuestros exclusivos autos de lujo."
                        </p>
                    </div>
                </div>

                <div class="mx-auto mt-10 mr-10 ml-10">
                    <div class="p-4 bg-white rounded-lg border border-gray-300 shadow-xl sm:flex sm:items-center sm:justify-between">
                        <div class="sm:flex-shrink-0">
                            <img class="h-60 w-60 rounded-full mb-4 sm:mb-0 sm:mr-4" src="{{ asset('img/mision.jpg') }}" alt="Imagen">
                        </div>
                        <div class="sm:ml-6">
                            <h2 class="text-xl font-semibold text-gray-800">Misión</h2>
                            <p class="mt-4 font-semibold">
                                Consolidarse como líder global en la venta de autos de lujo, proporcionando a sus clientes una experiencia exclusiva e inigualable. Comprometidos con la excelencia, se dedican a ofrecer vehículos de la más alta calidad, destacando por su innovación y elegancia. La empresa busca superar constantemente las expectativas, cultivar relaciones a largo plazo y posicionarse como referente en la industria del lujo automotriz.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mx-auto mt-10 mr-10 ml-10">
                    <div class="p-4 bg-white rounded-lg border border-gray-300 shadow-xl sm:flex sm:items-center sm:justify-between">
                        <div class="sm:ml-6">
                            <h2 class="text-xl font-semibold text-gray-800">Visión</h2>
                            <p class="mt-4 font-semibold">
                                Ser reconocida como la elección predilecta para aquellos que buscan la perfección en cada viaje. Aspiran a ser un símbolo de distinción y excelencia a nivel mundial en la venta de autos de lujo. Guiados por la innovación y la integridad, buscan establecer nuevos estándares en la industria al fusionar un rendimiento excepcional con una artesanía impecable. La visión es crear un legado de experiencias inolvidables, elevando continuamente el estándar de lo que significa poseer un automóvil de lujo.
                            </p>
                        </div>
                        <div class="sm:flex-shrink-0">
                            <img class="h-60 w-60 rounded-full mt-4 sm:mt-0 sm:ml-4" src="{{ asset('img/vision.jpg') }}" alt="Imagen">
                        </div>
                    </div>
                </div>

                <h4 class="text-lg sm:text-2xl text-center mt-4 sm:mt-20 mb-4 sm:mb-10 ml-6">Valores Corporativos</h4>

                <ul role="list" class="ml-10 mr-10 mb-10 divide-y divide-gray-200">
                <li class="flex flex-col sm:flex-row justify-between gap-x-6 py-5">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Excelencia y Calidad</p>
                        <p class="mt-1 text-xs sm:text-sm leading-5 text-gray-500 font-semibold">
                            Destacar por compromiso con la excelencia y la calidad en todos los aspectos, desde el diseño y la fabricación hasta la experiencia del cliente. Se busca ofrecer productos y servicios que representen lo mejor en su clase.
                        </p>
                    </div>
                </li>
                <li class="flex flex-col sm:flex-row justify-between gap-x-6 py-5">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Innovación y Tecnología Avanzada</p>
                        <p class="mt-1 text-xs sm:text-sm leading-5 text-gray-500 font-semibold">
                            La innovación constante y la adopción de tecnologías de vanguardia son valores clave para muchas empresas de autos de lujo. Esto se refleja en el diseño de vehículos de última generación, características avanzadas y soluciones técnicas innovadoras.
                        </p>
                    </div>
                </li>
                <li class="flex flex-col sm:flex-row justify-between gap-x-6 py-5">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm sm:text-base font-semibold leading-6 text-gray-900">Exclusividad y Prestigio</p>
                        <p class="mt-1 text-xs sm:text-sm leading-5 text-gray-500 font-semibold">
                            La exclusividad es un valor fundamental en el mercado de autos de lujo. Las marcas buscan crear una sensación de prestigio y distinción al limitar la disponibilidad de ciertos modelos, ofrecer personalizaciones exclusivas y mantener altos estándares de calidad en todos sus productos.
                        </p>
                    </div>
                </li>
            </ul>


                @include('footer')

    
</body>
</html>
