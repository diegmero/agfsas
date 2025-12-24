<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- Dynamic SEO Meta Tags --}}
    <title>{{ $title ?? 'Alliance Global Freight - Soluciones Logísticas Integrales en Colombia' }}</title>
    <meta name="description"
        content="{{ $description ?? 'Líderes en logística internacional. Agenciamiento aduanero, transporte terrestre, marítimo y almacenaje. 6+ años conectando Colombia con el mundo.' }}">
    <meta name="keywords"
        content="{{ $keywords ?? 'logística Colombia, agenciamiento aduanero, transporte internacional, carga marítima, transporte terrestre, almacenaje, AGFSAS, Alliance Global Freight' }}">
    <meta name="author" content="Alliance Global Freight SAS">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Theme Color for Mobile Browsers --}}
    <meta name="theme-color" content="#F1B10E">
    <meta name="msapplication-TileColor" content="#F1B10E">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Alliance Global Freight - Soluciones Logísticas Integrales' }}">
    <meta property="og:description"
        content="{{ $description ?? 'Líderes en logística internacional. Agenciamiento aduanero, transporte terrestre, marítimo y almacenaje.' }}">
    <meta property="og:image"
        content="https://res.cloudinary.com/dspoaxmvn/image/upload/v1766586402/agfsas-removebg-preview_2_odkoqc.png">
    <meta property="og:site_name" content="Alliance Global Freight SAS">
    <meta property="og:locale" content="es_CO">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $title ?? 'Alliance Global Freight - Soluciones Logísticas Integrales' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Líderes en logística internacional en Colombia.' }}">
    <meta name="twitter:image"
        content="https://res.cloudinary.com/dspoaxmvn/image/upload/v1766586402/agfsas-removebg-preview_2_odkoqc.png">

    {{-- Favicon --}}
    <link rel="icon" type="image/png"
        href="https://res.cloudinary.com/dspoaxmvn/image/upload/v1766586402/agfsas-removebg-preview_2_odkoqc.png">
    <link rel="apple-touch-icon"
        href="https://res.cloudinary.com/dspoaxmvn/image/upload/v1766586402/agfsas-removebg-preview_2_odkoqc.png">

    {{-- Preconnect for Performance --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://res.cloudinary.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- JSON-LD Structured Data --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Alliance Global Freight SAS",
        "alternateName": "AGFSAS",
        "url": "{{ url('/') }}",
        "logo": "https://res.cloudinary.com/dspoaxmvn/image/upload/v1766586402/agfsas-removebg-preview_2_odkoqc.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+57-317-515-0152",
            "contactType": "customer service",
            "areaServed": "CO",
            "availableLanguage": ["es", "en"]
        },
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Av. Troncal de Occidente 20-85",
            "addressLocality": "Mosquera",
            "addressRegion": "Cundinamarca",
            "postalCode": "250040",
            "addressCountry": "CO"
        },
        "sameAs": [
            "https://www.linkedin.com/in/alliance-global-freight-51a21a230/",
            "https://www.instagram.com/agfsas/",
            "https://www.facebook.com/p/Grupo-logístico-AGF-100083154889778/"
        ]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Alliance Global Freight SAS",
        "image": "https://res.cloudinary.com/dspoaxmvn/image/upload/v1766586402/agfsas-removebg-preview_2_odkoqc.png",
        "@id": "{{ url('/') }}",
        "url": "{{ url('/') }}",
        "telephone": "+57-317-515-0152",
        "priceRange": "$$",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Av. Troncal de Occidente 20-85",
            "addressLocality": "Mosquera",
            "addressRegion": "Cundinamarca",
            "postalCode": "250040",
            "addressCountry": "CO"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 4.7069,
            "longitude": -74.2318
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"
            ],
            "opens": "08:00",
            "closes": "18:00"
        }
    }
    </script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Placeholder for dev mode if vite not running -->
    @endif
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            animation: marquee 60s linear infinite;
            width: max-content;
            display: flex;
        }

        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Top Bar (Corporate Style) -->
        <div class="bg-black text-white text-xs font-medium py-2">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <div class="flex space-x-6">
                    <span>Empresas</span>
                    <span>Personas</span>
                </div>
                <div class="flex space-x-6">
                    <a href="https://wa.me/3175150152" class="hover:text-agf-yellow transition">Rastreo</a>
                    <a href="https://wa.me/3175150152" class="hover:text-agf-yellow transition">Atención al Cliente</a>
                    <a href="#" class="hover:text-agf-yellow transition">ES / EN</a>
                </div>
            </div>
        </div>

        <!-- Sticky Header Wrapper -->
        <div class="sticky top-0 z-50">
            <!-- TRM Ticker Row (Yellow) -->
            <div id="trm-bar"
                class="bg-agf-yellow text-black text-xs font-bold py-1 overflow-hidden relative border-b border-yellow-500 hidden">
                <div class="animate-marquee whitespace-nowrap inline-block">
                    <!-- Set 1 -->
                    <div class="inline-flex items-center">
                        <span class="trm-value px-4">Cargando TRM...</span>
                        <span class="px-4 mx-10">•</span>
                        <span class="trm-value px-4">Cargando TRM...</span>
                        <span class="px-4 mx-10">•</span>
                        <span class="trm-value px-4">Cargando TRM...</span>
                        <span class="px-4 mx-10">•</span>
                        <span class="trm-value px-4">Cargando TRM...</span>
                        <span class="px-4 mx-10">•</span>
                    </div>
                    <!-- Set 2 (Duplicate for Loop) -->
                    <div class="inline-flex items-center">
                        <span class="trm-value px-4">Cargando TRM...</span>
                        <span class="px-4 mx-10">•</span>
                        <span class="trm-value px-4">Cargando TRM...</span>
                        <span class="px-4 mx-10">•</span>
                        <span class="trm-value px-4">Cargando TRM...</span>
                        <span class="px-4 mx-10">•</span>
                        <span class="trm-value px-4">Cargando TRM...</span>
                        <span class="px-4 mx-10">•</span>
                    </div>
                </div>
            </div>

            <!-- Main Header -->
            <header class="bg-white shadow-sm border-b border-gray-100 transition-all duration-300" id="main-header">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-20">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <a href="/" class="flex items-center gap-3 group">
                                <img class="h-16 w-auto object-contain group-hover:opacity-90 transition-opacity"
                                    src="https://res.cloudinary.com/dspoaxmvn/image/upload/v1766586402/agfsas-removebg-preview_2_odkoqc.png"
                                    alt="AGFSAS Logo">
                            </a>
                        </div>

                        <!-- Desktop Nav -->
                        <nav class="hidden md:flex space-x-10 items-center">
                            <a href="{{ route('home') }}"
                                class="text-base font-bold text-gray-900 hover:text-agf-yellow uppercase tracking-wide transition-colors {{ request()->routeIs('home') ? 'text-agf-yellow' : '' }}">Inicio</a>
                            <a href="{{ route('services') }}"
                                class="text-base font-bold text-gray-900 hover:text-agf-yellow uppercase tracking-wide transition-colors {{ request()->routeIs('services') ? 'text-agf-yellow' : '' }}">Servicios</a>
                            <a href="{{ route('about') }}"
                                class="text-base font-bold text-gray-900 hover:text-agf-yellow uppercase tracking-wide transition-colors {{ request()->routeIs('about') ? 'text-agf-yellow' : '' }}">Nosotros</a>
                            <a href="{{ route('contact') }}"
                                class="text-base font-bold text-gray-900 hover:text-agf-yellow uppercase tracking-wide transition-colors {{ request()->routeIs('contact') ? 'text-agf-yellow' : '' }}">Contacto</a>
                        </nav>

                        <!-- CTA Button -->
                        <div class="hidden md:flex items-center">
                            <a href="https://wa.me/3175150152"
                                class="bg-agf-yellow text-black px-6 py-3 rounded font-extrabold uppercase tracking-wide text-sm hover:bg-yellow-500 hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                                Cotizar Envío
                            </a>
                        </div>

                        <!-- Mobile Menu Button -->
                        <div class="md:hidden flex items-center">
                            <button id="mobile-menu-btn" class="text-gray-900 hover:text-agf-yellow focus:outline-none">
                                <i class="fas fa-bars text-3xl"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu"
                    class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full left-0 z-40 shadow-lg">
                    <div class="px-4 pt-2 pb-6 space-y-2">
                        <a href="{{ route('home') }}"
                            class="block px-3 py-3 rounded-md text-base font-bold text-gray-900 hover:bg-agf-yellow/10 hover:text-agf-yellow {{ request()->routeIs('home') ? 'text-agf-yellow bg-agf-yellow/5' : '' }}">Inicio</a>
                        <a href="{{ route('services') }}"
                            class="block px-3 py-3 rounded-md text-base font-bold text-gray-900 hover:bg-agf-yellow/10 hover:text-agf-yellow {{ request()->routeIs('services') ? 'text-agf-yellow bg-agf-yellow/5' : '' }}">Servicios</a>
                        <a href="{{ route('about') }}"
                            class="block px-3 py-3 rounded-md text-base font-bold text-gray-900 hover:bg-agf-yellow/10 hover:text-agf-yellow {{ request()->routeIs('about') ? 'text-agf-yellow bg-agf-yellow/5' : '' }}">Nosotros</a>
                        <a href="{{ route('contact') }}"
                            class="block px-3 py-3 rounded-md text-base font-bold text-gray-900 hover:bg-agf-yellow/10 hover:text-agf-yellow {{ request()->routeIs('contact') ? 'text-agf-yellow bg-agf-yellow/5' : '' }}">Contacto</a>
                        <a href="https://wa.me/3175150152"
                            class="block w-full text-center mt-4 bg-agf-yellow text-black px-6 py-3 rounded font-extrabold uppercase tracking-wide text-sm hover:bg-yellow-500">
                            Cotizar Envío
                        </a>
                    </div>
                </div>
            </header>
        </div>

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-black text-white mt-auto pt-16 pb-8 border-t-4 border-agf-yellow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                    <div class="col-span-1 md:col-span-1">
                        <img class="h-12 w-auto mb-6 grayscale hover:grayscale-0 transition"
                            src="https://res.cloudinary.com/dspoaxmvn/image/upload/v1766586402/agfsas-removebg-preview_2_odkoqc.png"
                            alt="AGFSAS Footer Logo">
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Conectando a Colombia con el mundo. Soluciones logísticas integrales con tecnología de
                            punta
                            y seguridad garantizada.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-agf-yellow font-bold uppercase tracking-wider mb-4 text-sm">Nuestros
                            Servicios
                        </h3>
                        <ul class="space-y-3 text-sm text-gray-300">
                            <li><a href="#" class="hover:text-white transition">Carga Aérea</a></li>
                            <li><a href="#" class="hover:text-white transition">Carga Marítima</a></li>
                            <li><a href="#" class="hover:text-white transition">Transporte Terrestre</a></li>
                            <li><a href="#" class="hover:text-white transition">Aduanas</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-agf-yellow font-bold uppercase tracking-wider mb-4 text-sm">Legal</h3>
                        <ul class="space-y-3 text-sm text-gray-300">
                            <li><a href="#" class="hover:text-white transition">Política de Privacidad</a></li>
                            <li><a href="#" class="hover:text-white transition">Términos y Condiciones</a></li>
                            <li><a href="#" class="hover:text-white transition">Sostenibilidad</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-agf-yellow font-bold uppercase tracking-wider mb-4 text-sm">Contacto</h3>
                        <ul class="space-y-3 text-sm text-gray-300">
                            <li class="flex items-start gap-3">
                                Mosquera, Colombia
                            </li>
                            <li class="flex items-start gap-3">
                                +57 317 515 0152
                            </li>
                            <li class="flex items-start gap-3">
                                info@agfsas.com.co
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-500 text-sm">
                        &copy; {{ date('Y') }} AGF SAS. Todos los derechos reservados.
                    </div>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="https://www.linkedin.com/in/alliance-global-freight-51a21a230/?originalSubdomain=co"
                            class="text-gray-400 hover:text-agf-yellow text-xl"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/agfsas/"
                            class="text-gray-400 hover:text-agf-yellow text-xl"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Floating Social Sidebar (Hidden on Mobile) -->
    <div class="fixed right-0 top-1/2 transform -translate-y-1/2 z-50 hidden md:flex flex-col gap-2 items-end">
        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/in/alliance-global-freight-51a21a230/?originalSubdomain=co" target="_blank"
            class="group flex items-center justify-end w-12 hover:w-36 h-12 bg-blue-700 text-white shadow-lg rounded-l-lg overflow-hidden transition-all duration-300 relative">
            <span
                class="absolute right-14 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap font-bold pr-2">LinkedIn</span>
            <div class="w-12 h-12 flex items-center justify-center flex-shrink-0">
                <i class="fab fa-linkedin-in text-2xl"></i>
            </div>
        </a>
        <!-- Facebook -->
        <a href="https://www.facebook.com/p/Grupo-log%C3%ADstico-AGF-100083154889778/?locale=es_LA" target="_blank"
            class="group flex items-center justify-end w-12 hover:w-36 h-12 bg-blue-600 text-white shadow-lg rounded-l-lg overflow-hidden transition-all duration-300 relative">
            <span
                class="absolute right-14 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap font-bold pr-2">Facebook</span>
            <div class="w-12 h-12 flex items-center justify-center flex-shrink-0">
                <i class="fab fa-facebook-f text-2xl"></i>
            </div>
        </a>
        <!-- WhatsApp -->
        <a href="https://wa.me/573175150152" target="_blank"
            class="group flex items-center justify-end w-12 hover:w-36 h-12 bg-green-500 text-white shadow-lg rounded-l-lg overflow-hidden transition-all duration-300 relative">
            <span
                class="absolute right-14 opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap font-bold pr-2">WhatsApp</span>
            <div class="w-12 h-12 flex items-center justify-center flex-shrink-0">
                <i class="fab fa-whatsapp text-2xl"></i>
            </div>
        </a>
    </div>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // TRM Fetcher
        document.addEventListener('DOMContentLoaded', function () {
            fetch('https://www.datos.gov.co/resource/32sa-8pi3.json?$limit=1&$order=vigenciahasta%20DESC')
                .then(response => response.json())
                .then(data => {
                    if (data && data.length > 0) {
                        const valor = new Intl.NumberFormat('es-CO', { style: 'currency', currency: 'COP' }).format(data[0].valor);
                        const vigencia = new Date(data[0].vigenciahasta).toLocaleDateString('es-CO');

                        const text = `LA TRM DE HOY ES: ${valor}  -  VIGENCIA: ${vigencia}`;

                        // Update all elements with class 'trm-value'
                        document.querySelectorAll('.trm-value').forEach(el => {
                            el.textContent = text;
                        });


                        // Show the bar
                        document.getElementById('trm-bar').classList.remove('hidden');
                    }
                })
                .catch(err => console.error('Error fetching TRM:', err));
        });
    </script>
</body>

</html>