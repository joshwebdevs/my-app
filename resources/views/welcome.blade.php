<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sample App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <!-- Inline fallback Tailwind styles if Vite is unavailable -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" integrity="sha384-Xn0pASGkhKrxzpYw0CN7o/sA1jKptzIGjIoI1jYvDgUuB+S9GiysptmbI9t4J8sG" crossorigin="anonymous">
        @endif
    </head>
    <body class="font-sans antialiased bg-gray-50 text-black/50">
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
            
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <!-- Laravel Logo SVG -->
                        <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.34 0c1.44 0 2.85.38 4.09 1.1l19.56 11.3a7.91 7.91 0 0 1 4.1 7.1v22.6a7.9 7.9 0 0 1-4.1 7.1l-19.56 11.3a7.9 7.9 0 0 1-8.19 0l-19.56-11.3A7.91 7.91 0 0 1 2 42.1v-22.6a7.91 7.91 0 0 1 4.1-7.1L25.66 1.1A7.9 7.9 0 0 1 30.34 0zm1.42 5.93c-.82-.47-1.84-.47-2.66 0L11.5 15.5a3.1 3.1 0 0 0-1.6 2.8v22.6c0 1.14.62 2.2 1.6 2.8l17.6 10.17c.82.48 1.84.48 2.66 0L50.5 43.7c.98-.57 1.6-1.63 1.6-2.8v-22.6c0-1.15-.62-2.2-1.6-2.8L31.76 5.93z" fill="currentColor"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.66 18.1c1.3-.75 2.92-.75 4.23 0l10.92 6.32a3.1 3.1 0 0 1 1.58 2.7v12.7a3.1 3.1 0 0 1-1.58 2.7l-10.92 6.32c-1.3.75-2.92.75-4.23 0l-10.92-6.32a3.1 3.1 0 0 1-1.58-2.7V27.1a3.1 3.1 0 0 1 1.58-2.7l10.92-6.32zm1.42 2.66a.9.9 0 0 0-.95 0L18.2 27.1a.9.9 0 0 0-.47.8v12.7c0 .33.18.63.47.8l10.92 6.32c.28.17.67.17.95 0l10.92-6.32c.29-.17.47-.47.47-.8V27.9a.9.9 0 0 0-.47-.8l-10.92-6.32z" fill="currentColor"/>
                        </svg>
                    </div>
                </header>
                
                <!-- Main Content Section -->
                <main class="mt-12 flex flex-col items-center">
                    <h1 class="text-4xl font-bold text-gray-900 lg:text-5xl">
                        Welcome to Sample App
                    </h1>
                    <p class="mt-4 text-lg text-gray-600">
                        Where you can share anything!
                    </p>
                    
                    <!-- Buttons or Links for Navigation -->
                    <div class="mt-8 flex gap-4">
                        
                        <a href="/login" class="px-6 py-2 rounded-md border border-gray-300 text-gray-700 font-semibold hover:bg-gray-100">
                            Login
                        </a>
                        <a href="/register" class="px-6 py-2 rounded-md border border-gray-300 text-gray-700 font-semibold hover:bg-gray-100">
                            Register
                        </a>
                    </div>
                </main>
                
                <!-- Footer -->
                <footer class="mt-16 text-center text-gray-500">
                    <p>&copy; {{ now()->year }}. All rights reserved.</p>
                </footer>
            </div>
        </div>
    </body>
</html>
