<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Styles -->
    <style>
        .background-image {
            background-image: url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative min-h-screen flex flex-col background-image">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Navbar -->


        <!-- Hero Section -->
        <div class="text-center text-white px-8 py-12 z-10 flex-1 flex flex-col justify-center">
            <h1 class="text-5xl font-bold mb-4">Selamat Datang di Perpustakaan</h1>
            <p class="text-lg mb-8">Jelajahi dunia pengetahuan dengan koleksi buku digital kami yang luas.</p>

            <!-- Login & Register Buttons -->
            <div class="mt-8 flex justify-center space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}"
                            class="text-white hover:text-gray-300 font-semibold px-6 py-3 border border-white rounded-lg">Home</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-white hover:text-gray-300 font-semibold px-6 py-3 border border-white rounded-lg">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="text-white hover:text-gray-300 font-semibold px-6 py-3 border border-white rounded-lg">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>

        <!-- Features Section -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-6 px-6 z-10">
            <div
                class="bg-white bg-opacity-80 rounded-lg shadow-lg transform transition hover:scale-105 hover:shadow-2xl p-6 text-center">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-800 mx-auto" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c1.104 0 2 .896 2 2m0 0a2 2 0 11-4 0 2 2 0 014 0zm0 8v1m0 4h.01" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-gray-800 mb-2">Koleksi Lengkap</h2>
                <p class="text-gray-600">Akses ribuan buku dari berbagai genre dan kategori.</p>
            </div>
            <div
                class="bg-white bg-opacity-80 rounded-lg shadow-lg transform transition hover:scale-105 hover:shadow-2xl p-6 text-center">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-800 mx-auto" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-gray-800 mb-2">Akses 24/7</h2>
                <p class="text-gray-600">Baca buku favorit Anda kapan saja dan di mana saja.</p>
            </div>
            <div
                class="bg-white bg-opacity-80 rounded-lg shadow-lg transform transition hover:scale-105 hover:shadow-2xl p-6 text-center">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-800 mx-auto" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 16l-4-4m0 0l4-4m-4 4h16" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-gray-800 mb-2">Antarmuka Ramah Pengguna</h2>
                <p class="text-gray-600">Nikmati pengalaman membaca yang mudah dan menyenangkan.</p>
            </div>
        </div>

        <!-- Footer -->
        <footer class="mt-auto py-4 bg-transparant text-white text-center z-10 w-full">
            <p>&copy; 2024 Perpustakaan Digital. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>
