<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form - Arthadaya Theme</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .backdrop-blur-glass {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .bg-overlay {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
        }

        .logo-circle {
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>

<body class="h-screen flex items-center justify-center bg-overlay font-sans">
    <div class="flex flex-col items-center">
        <!-- Arthadaya Logo -->
        <img class="w-24 h-24 mb-6 logo-circle" src="{{ asset('images/arthadaya_group.jpg') }}" alt="Arthadaya Logo">

        <!-- Login Form -->
        <div class="w-full max-w-xl bg-white/20 rounded-xl shadow-lg p-8 border border-white/30 backdrop-blur-glass">
            <h2 class="text-3xl font-bold text-white text-center mb-2 drop-shadow-md">Welcome Back 👋</h2>
            <p class="text-sm text-white/80 text-center mb-6 drop-shadow-sm">Silakan login untuk melanjutkan</p>

            {{-- ✅ Error / Success Message --}}
            @if (session('status'))
                <div class="mb-4 p-3 text-green-100 bg-green-600/70 rounded-lg text-center">
                    {{ session('status') }}
                </div>
            @endif

            @if (session('error'))
                <div class="mb-4 p-3 text-red-100 bg-red-600/70 rounded-lg text-center">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 p-3 text-red-100 bg-red-600/70 rounded-lg text-center">
                    <ul class="list-none m-0 p-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Username -->
                <div>
                    <input type="email" name="email" placeholder="Email" required
                        class="w-full px-4 py-3 rounded-lg border border-white/30 bg-white/10 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-[#B88E2F] transition duration-200">
                </div>

                <!-- Password -->
                <div>
                    <input type="password" name="password" placeholder="Password" required
                        class="w-full px-4 py-3 rounded-lg border border-white/30 bg-white/10 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-[#B88E2F] transition duration-200">
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full py-3 rounded-lg bg-[#B88E2F] text-white font-semibold hover:bg-[#9c7626] transition duration-300 shadow-md">
                    Login
                </button>

                <!-- Register -->
                <p class="text-center text-sm text-white/80 mt-6 drop-shadow-sm">
                    Belum punya akun?
                    <a href="{{ route('register-form') }}" class="text-[#B88E2F] hover:underline font-medium">Daftar</a>
                </p>
            </form>
        </div>
    </div>
</body>

</html>
