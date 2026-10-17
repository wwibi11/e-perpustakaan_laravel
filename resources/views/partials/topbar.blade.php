<header class="fixed top-0 left-64 right-0 h-14 bg-surface/80 backdrop-blur-xl z-40 flex items-center justify-between px-6 shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
    <div class="flex items-center gap-x-4">
        <img alt="E-Perpustakaan Logo" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1Wwmv1k4WtPmKqqOlsPHIlu9r1vnIG8KiHN3TmvulHV3GaIGy2MaTSnZkvXHZTcy48F-F9_KGaHkc0z9RAUHXGRJkBG6h4xKz8Rp-n8skeZMCm0pMrLBPx-aGzX2BcKRouAP7Ad_TKMzO8DwsibCQMUzTaB9pPaIOYJXjcnLY7U82NnB6biO1K0XEQzB1istYEjBROTt9XQtxi09UPhFO4HMe2ARBTmPHayVOMPZpSevTLJdOzPCzr2_npW"/>
        
        <div class="hidden lg:flex items-center gap-x-2 px-2.5 py-1 bg-surface-container rounded-full">
            <span class="w-2 h-2 rounded-full bg-primary"></span>
            <span class="font-label-sm text-label-sm text-on-surface font-medium">Shift Pagi • Sistem Online v1.0.0</span>
        </div>
        
        <div class="relative flex items-center w-72">
            <span class="material-symbols-outlined absolute left-2.5 text-on-surface-variant text-[18px]">barcode_scanner</span>
            <input class="w-full h-9 pl-9 pr-8 bg-surface-container-lowest font-data-mono text-data-mono text-on-surface placeholder:text-outline rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Scan Barcode / Cari ISBN (Alt+S)..." type="text"/>
            <kbd class="absolute right-2 px-1.5 py-0.5 bg-surface-container text-on-surface-variant font-data-mono text-[10px] rounded">/</kbd>
        </div>
    </div>
    
    <div class="flex items-center gap-x-3">
        <button class="flex items-center gap-x-1.5 h-9 px-3 bg-primary text-on-primary hover:bg-primary-container font-label-md text-label-md rounded-lg transition-colors" type="button">
            <span class="material-symbols-outlined text-[18px]">qr_code_scanner</span>
            <span>Scan Sirkulasi</span>
            <kbd class="ml-1 px-1.5 py-0.2 bg-on-primary/20 text-on-primary font-data-mono text-[10px] rounded">F2</kbd>
        </button>
        
        <button class="relative p-2 text-on-surface-variant hover:text-on-surface hover:bg-surface-container rounded-lg transition-colors" title="Pemberitahuan Sistem" type="button">
            <span class="material-symbols-outlined text-[20px]">notifications</span>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-error ring-2 ring-surface"></span>
        </button>

        <!-- Profil Dinamis & Logout -->
        <div class="flex items-center gap-x-3 pl-3 border-l border-outline-variant">
            <div class="flex items-center gap-x-2.5">
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
                </div>
                <div class="hidden md:flex flex-col text-left">
                    <!-- Menampilkan nama user yang login -->
                    <span class="font-title-sm text-title-sm text-on-surface leading-none">{{ auth()->user()->name ?? 'Guest' }}</span>
                    <!-- Menampilkan role user -->
                    <span class="font-label-sm text-label-sm text-on-surface-variant leading-tight capitalize">{{ str_replace('_', ' ', auth()->user()->role ?? '-') }}</span>
                </div>
            </div>
            
            <!-- Tombol Logout -->
            <form method="POST" action="{{ route('logout') }}" class="m-0">
                @csrf
                <button type="submit" class="p-1.5 text-error hover:bg-error-container hover:text-on-error-container rounded-lg transition-colors" title="Keluar Sistem">
                    <span class="material-symbols-outlined text-[20px]">logout</span>
                </button>
            </form>
        </div>
    </div>
</header>