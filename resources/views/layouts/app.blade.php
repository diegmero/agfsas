<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AGFSAS - Logística Internacional</title>
    
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Placeholder for dev mode if vite not running -->
    @endif
</head>
<body class="bg-gray-50 text-black font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-black text-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <div class="flex-shrink-0 flex items-center gap-2">
                        <!-- Logo Placeholder -->
                        <div class="w-10 h-10 bg-agf-yellow rounded flex items-center justify-center font-bold text-black text-xl">A</div>
                        <span class="font-bold text-xl tracking-tight text-agf-yellow">AGFSAS</span>
                    </div>
                    <nav class="hidden md:flex space-x-8">
                        <a href="/" class="text-gray-300 hover:text-agf-yellow transition-colors duration-200">Inicio</a>
                        <a href="#" class="text-gray-300 hover:text-agf-yellow transition-colors duration-200">Servicios</a>
                        <a href="#" class="text-gray-300 hover:text-agf-yellow transition-colors duration-200">Nosotros</a>
                        <a href="#" class="text-gray-300 hover:text-agf-yellow transition-colors duration-200">Contacto</a>
                    </nav>
                    <div class="flex items-center">
                        <a href="#" class="bg-agf-yellow text-black px-4 py-2 rounded font-semibold hover:bg-yellow-400 transition-colors">
                            Cotizar
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-black text-white mt-auto">
            <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <span class="text-2xl font-bold text-agf-yellow">AGFSAS</span>
                        <p class="mt-2 text-sm text-gray-400">Logística Internacional y Soluciones de Transporte.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                         <div>
                            <h2 class="mb-6 text-sm font-semibold text-agf-yellow uppercase tracking-wider">Empresa</h2>
                            <ul class="text-gray-400">
                                <li class="mb-4"><a href="#" class="hover:text-white">Sobre Nosotros</a></li>
                                <li><a href="#" class="hover:text-white">Carreras</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="my-6 border-gray-800" />
                <div class="text-center text-sm text-gray-400">
                    &copy; {{ date('Y') }} AGFSAS. Todos los derechos reservados.
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
