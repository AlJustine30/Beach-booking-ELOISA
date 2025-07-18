<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Beach Paradise') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600|pacifico:400&display=swap" rel="stylesheet" />

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            .bg-primary {
                background-color: #f0f9ff;
            }
            .text-primary {
                color: #0ea5e9;
            }
            .text-secondary {
                color: #f59e0b;
            }
            .border-primary {
                border-color: #0ea5e9;
            }
            .btn-primary {
                background-color: #0ea5e9;
                transition: all 0.3s ease;
            }
            .btn-primary:hover {
                background-color: #0284c7;
                transform: translateY(-2px);
                box-shadow: 0 10px 20px -10px rgba(14, 165, 233, 0.6);
            }
            .btn-secondary {
                background-color: #f59e0b;
                transition: all 0.3s ease;
            }
            .btn-secondary:hover {
                background-color: #e69008;
                transform: translateY(-2px);
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-blue-50 text-gray-800">
        <div class="min-h-screen bg-blue-50">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow-lg border-b border-teal-300">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="bg-blue-50">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
