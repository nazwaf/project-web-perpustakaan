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

    <!-- Font Awesome (untuk ikon) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        .background-image {
            background-image: url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="min-h-screen flex justify-center items-center background-image">
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <!-- Tombol Kembali dengan Ikon -->
    <a href="{{ url('/') }}"
        class="absolute top-8 left-8 text-white text-2xl bg-transparent hover:bg-gray-800 p-2 rounded-full border border-white flex items-center justify-center">
        <i class="fas fa-arrow-left"></i>
    </a>

    <div class="z-10 p-8 w-full max-w-md bg-white bg-opacity-80 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">{{ __('Login') }}</h2>

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-gray-700">{{ __('Email Address') }}</label>
                <input id="email" type="email"
                    class="form-control w-full p-2 mt-2 border rounded-lg @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-gray-700">{{ __('Password') }}</label>
                <input id="password" type="password"
                    class="form-control w-full p-2 mt-2 border rounded-lg @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="flex items-center justify-between mt-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <a class="text-blue-500 hover:text-blue-300 text-sm" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-between mt-4">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg">
                    {{ __('Login') }}
                </button>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-300">Register</a>
                @endif
            </div>
        </form>
    </div>
</body>

</html>
