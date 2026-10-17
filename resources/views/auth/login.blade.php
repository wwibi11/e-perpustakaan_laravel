<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Staff - E-Perpustakaan</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: "#00236f", surface: "#f8f9ff", "on-surface": "#0b1c30", "surface-container": "#e5eeff" },
                    fontFamily: { sans: ["Plus Jakarta Sans", "sans-serif"] }
                }
            }
        }
    </script>
</head>
<body class="bg-surface font-sans text-on-surface flex items-center justify-center min-h-screen antialiased">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
        <!-- Logo & Header -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-primary rounded-2xl mx-auto flex items-center justify-center mb-4 shadow-lg">
                <span class="material-symbols-outlined text-white text-[32px]">local_library</span>
            </div>
            <h1 class="text-2xl font-bold text-primary tracking-tight">E-Perpustakaan</h1>
            <p class="text-sm text-gray-500 mt-1">Silakan login ke Staff Portal</p>
        </div>

        <!-- Error Message -->
        @if ($errors->any())
            <div class="bg-red-50 text-red-600 p-3 rounded-lg text-sm mb-6 border border-red-200 flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px]">error</span>
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form Login -->
        <form method="POST" action="{{ route('login.post') }}" class="space-y-5">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Username</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-[20px]">person</span>
                    <input type="text" name="username" value="{{ old('username') }}" required autofocus
                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all"
                        placeholder="Masukkan username (cth: admin)">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Password</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-[20px]">lock</span>
                    <input type="password" name="password" required
                        class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-all"
                        placeholder="••••••••">
                </div>
            </div>

            <button type="submit" class="w-full bg-primary hover:bg-blue-900 text-white font-semibold py-2.5 rounded-lg transition-colors shadow-md mt-2 flex justify-center items-center gap-2">
                <span class="material-symbols-outlined text-[20px]">login</span>
                Masuk ke Sistem
            </button>
        </form>
        
        <div class="mt-6 text-center text-xs text-gray-400">
            &copy; 2026 E-Perpustakaan. All rights reserved.
        </div>
    </div>

</body>
</html>