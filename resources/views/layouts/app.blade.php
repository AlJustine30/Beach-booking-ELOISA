<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Beach Paradise') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600|pacifico:400|playfair-display:700&display=swap" rel="stylesheet" />

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            sand: {
                                50: '#faf8f0',
                                100: '#f3eed9',
                                200: '#e8ddb5',
                                300: '#d9c588',
                                400: '#c9a95e',
                                500: '#bd9749',
                                600: '#a87b3a',
                                700: '#8a5f32',
                                800: '#714d2f',
                                900: '#60412c',
                            },
                            ocean: {
                                50: '#f0f9ff',
                                100: '#e0f2fe',
                                200: '#bae6fd',
                                300: '#7dd3fc',
                                400: '#38bdf8',
                                500: '#0ea5e9',
                                600: '#0284c7',
                                700: '#0369a1',
                                800: '#075985',
                                900: '#0c4a6e',
                            },
                            coral: {
                                50: '#fff1f2',
                                100: '#ffe4e6',
                                200: '#fecdd3',
                                300: '#fda4af',
                                400: '#fb7185',
                                500: '#f43f5e',
                                600: '#e11d48',
                                700: '#be123c',
                                800: '#9f1239',
                                900: '#881337',
                            }
                        }
                    }
                }
            }
        </script>

        <style>
            .wave-bg {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23faf8f0' fill-opacity='1' d='M0,160L48,170.7C96,181,192,203,288,202.7C384,203,480,181,576,181.3C672,181,768,203,864,213.3C960,224,1056,224,1152,208C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: bottom;
                background-size: 100%;
            }
            
            .btn-beach {
                background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 100%);
                box-shadow: 0 4px 15px rgba(14, 165, 233, 0.3);
                transition: all 0.3s ease;
                color: white;
                font-weight: 600;
                border: none;
            }
            
            .btn-beach:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 20px rgba(14, 165, 233, 0.4);
                background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
            }
            
            .btn-coral {
                background: linear-gradient(135deg, #fb7185 0%, #f43f5e 100%);
                box-shadow: 0 4px 15px rgba(244, 63, 94, 0.3);
                transition: all 0.3s ease;
                color: white;
                font-weight: 600;
                border: none;
            }
            
            .btn-coral:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 20px rgba(244, 63, 94, 0.4);
                background: linear-gradient(135deg, #f43f5e 0%, #e11d48 100%);
            }
            
            .text-shadow {
                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
            }
            
            .font-beach {
                font-family: 'Playfair Display', serif;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-sand-50 text-gray-800">
        <div class="min-h-screen flex flex-col">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow-md">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <h1 class="text-3xl font-beach font-bold text-ocean-700">
                            {{ $header }}
                        </h1>
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-grow wave-bg bg-sand-50 pb-32">
                {{ $slot }}
            </main>
            
            <!-- Footer -->
            <footer class="bg-ocean-900 text-white py-8">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="mb-4 md:mb-0">
                            <h2 class="text-2xl font-beach">Beach Paradise</h2>
                            <p class="text-ocean-300">Your dream vacation awaits</p>
                        </div>
                        <div class="flex space-x-6">
                            <a href="#" class="text-ocean-300 hover:text-white transition">About</a>
                            <a href="#" class="text-ocean-300 hover:text-white transition">Contact</a>
                            <a href="#" class="text-ocean-300 hover:text-white transition">Privacy</a>
                            <a href="#" class="text-ocean-300 hover:text-white transition">Terms</a>
                        </div>
                    </div>
                    <div class="mt-8 pt-8 border-t border-ocean-700 text-center text-ocean-400">
                        <p>&copy; 2023 Beach Paradise. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
