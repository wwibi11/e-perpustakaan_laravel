<!DOCTYPE html>
<html lang="id">
<head>
    {{-- 1. HEADER --}}
    @include('partials.header')
</head>
<body class="bg-surface font-body-md text-body-md text-on-surface antialiased">

    {{-- 2. SIDEBAR --}}
    @include('partials.sidebar')

    <div class="pl-64">
        {{-- 3. TOPBAR --}}
        @include('partials.topbar')

        {{-- 4. KONTEN / ISI --}}
        <main class="relative pt-14 bg-surface min-h-screen">
            <div class="flex flex-col w-full p-6 space-y-6">
                @yield('content')
            </div>
        </main>
    </div>

    {{-- 5. FOOTER & SCRIPTS --}}
    @include('partials.footer')

</body>
</html>