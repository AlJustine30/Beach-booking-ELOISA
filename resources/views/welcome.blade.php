<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beach Paradise Resort</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600|pacifico:400&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .hero-gradient {
            background: linear-gradient(rgba(0, 0, 0, 0.3),
                        url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'));
            background-size: cover;
            background-position: center;
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
            color: white;
            transition: all 0.3s ease;
        }
        .btn-secondary:hover {
            background-color: #e69008;
            transform: translateY(-2px);
        }
        .feature-card {
            transition: all 0.3s ease;
            background-color: white;
            border: 1px solid #0ea5e9;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(14, 165, 233, 0.3);
        }
        .wave-icon {
            color: #0ea5e9;
        }
        .testimonial-bg {
            background-color: #f0f9ff;
        }
        .footer-bg {
            background-color: #0c4a6e;
        }
    </style>
</head>
<body class="antialiased font-['Figtree'] bg-blue-50">
    <!-- Hero Section -->
    <div class="hero-gradient text-white min-h-screen flex items-center">
        <div class="container mx-auto px-6 py-16 text-center">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-5xl font-bold mb-6 font-['Pacifico']">Beach Paradise Resort</h1>
                <p class="text-xl mb-10 opacity-90">
                    Experience the ultimate beach getaway with our tropical paradise resort.
                    Book your sunny escape and enjoy the ocean waves.
                </p>

                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route('dashboard') }}"
                               class="btn-primary px-8 py-3 rounded-lg font-semibold text-lg shadow-lg">
                                Enter Paradise
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                               class="btn-primary px-8 py-3 rounded-lg font-semibold text-lg shadow-lg">
                                Sign In
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="btn-secondary px-8 py-3 rounded-lg font-semibold text-lg">
                                    Sign Up
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-16 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-teal-600 mb-12 font-['Pacifico']">Experience Paradise</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card p-8 rounded-xl">
                    <div class="wave-icon mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-teal-600">Beach Cabins</h3>
                    <p class="text-gray-700">
                        Stay in our beachfront cabins with stunning ocean views and direct beach access.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card p-8 rounded-xl">
                    <div class="wave-icon mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-teal-600">Water Sports</h3>
                    <p class="text-gray-700">
                        Enjoy snorkeling, kayaking, and paddleboarding in crystal clear waters.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card p-8 rounded-xl">
                    <div class="wave-icon mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-teal-600">Sunset Cruises</h3>
                    <p class="text-gray-700">
                        Experience breathtaking sunsets on our guided boat tours along the coast.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="py-16 testimonial-bg">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-teal-600 mb-12 font-['Pacifico']">Guest Experiences</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Testimonial 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-teal-300">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-teal-100 flex items-center justify-center text-teal-600 font-bold mr-4">
                            JD
                        </div>
                        <div>
                            <h4 class="font-semibold text-teal-600">Jane Doe</h4>
                            <p class="text-gray-500 text-sm">Regular Visitor</p>
                        </div>
                    </div>
                    <p class="text-gray-700">
                        "The beach cabins were amazing! Waking up to ocean waves was absolutely magical."
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-amber-300">
                    <div class="flex items-center mb-4">
                        <div class="h-12 w-12 rounded-full bg-amber-100 flex items-center justify-center text-amber-600 font-bold mr-4">
                            AS
                        </div>
                        <div>
                            <h4 class="font-semibold text-amber-600">Alex Smith</h4>
                            <p class="text-gray-500 text-sm">Water Sports Enthusiast</p>
                        </div>
                    </div>
                    <p class="text-gray-700">
                        "The snorkeling tour revealed an incredible underwater world! Highly recommended."
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-bg text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p class="text-blue-200">&copy; {{ date('Y') }} Beach Paradise Resort. All rights reserved.</p>
            <div class="mt-4 flex justify-center space-x-6">
                <a href="#" class="text-blue-200 hover:text-white">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="text-blue-200 hover:text-white">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
