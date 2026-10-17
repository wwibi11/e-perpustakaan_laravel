<aside class="fixed left-0 top-0 h-full w-64 bg-surface-container-low z-50 flex flex-col justify-between py-4 shadow-[0_1px_8px_rgba(0,0,0,0.04)] overflow-y-auto">
    <div class="flex flex-col gap-y-4">
        <!-- Logo Area -->
        <div class="px-4 flex items-center justify-between">
            <div class="flex items-center gap-x-2.5">
                <img alt="E-Perpustakaan Logo" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1Wwmv1k4WtPmKqqOlsPHIlu9r1vnIG8KiHN3TmvulHV3GaIGy2MaTSnZkvXHZTcy48F-F9_KGaHkc0z9RAUHXGRJkBG6h4xKz8Rp-n8skeZMCm0pMrLBPx-aGzX2BcKRouAP7Ad_TKMzO8DwsibCQMUzTaB9pPaIOYJXjcnLY7U82NnB6biO1K0XEQzB1istYEjBROTt9XQtxi09UPhFO4HMe2ARBTmPHayVOMPZpSevTLJdOzPCzr2_npW"/>
                <div class="flex flex-col">
                    <span class="font-title-sm text-title-sm text-primary tracking-tight leading-none">E-Perpustakaan</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant leading-tight">Staff Portal</span>
                </div>
            </div>
        </div>

        <!-- Area Menu -->
        <nav class="flex flex-col px-3 pb-4 gap-y-1" data-active-classes="bg-primary-container text-on-primary font-title-sm">
            
            <!-- KATEGORI: UTAMA -->
            <div class="text-[11px] font-bold text-outline uppercase tracking-wider px-3 pt-2 pb-1">Utama</div>
            
            <a href="{{ route('dashboard') }}" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('dashboard') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">space_dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>

            <a href="{{ route('sirkulasi.index') }}" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('sirkulasi.*') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">sync_alt</span>
                <span class="font-body-md text-body-md">Meja Sirkulasi</span>
            </a>

            <!-- KATEGORI: MANAJEMEN KOLEKSI -->
            <div class="text-[11px] font-bold text-outline uppercase tracking-wider px-3 pt-4 pb-1">Manajemen Koleksi</div>

            <a href="#" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('books.*') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">menu_book</span>
                <span class="font-body-md text-body-md">Katalog Buku</span>
            </a>
            
            <a href="#" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('copies.*') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">barcode</span>
                <span class="font-body-md text-body-md">Data Eksemplar</span>
            </a>

            <a href="#" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('categories.*') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">category</span>
                <span class="font-body-md text-body-md">Kategori Buku</span>
            </a>

            <!-- Menu Baru: Pengarang & Penerbit -->
            <a href="#" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('authors.*') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">person_edit</span>
                <span class="font-body-md text-body-md">Data Pengarang</span>
            </a>
            <a href="#" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('publishers.*') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">apartment</span>
                <span class="font-body-md text-body-md">Data Penerbit</span>
            </a>

            <!-- KATEGORI: TRANSAKSI & ANGGOTA -->
            <div class="text-[11px] font-bold text-outline uppercase tracking-wider px-3 pt-4 pb-1">Transaksi & Anggota</div>

            <a href="#" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('members.*') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">group</span>
                <span class="font-body-md text-body-md">Data Anggota</span>
            </a>

            <!-- Menu Baru: Reservasi -->
            <a href="#" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('reservations.*') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">bookmark_add</span>
                <span class="font-body-md text-body-md">Reservasi Buku</span>
            </a>

            <a href="#" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('fines.*') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">receipt_long</span>
                <span class="font-body-md text-body-md">Denda & Tagihan</span>
            </a>

            <!-- KATEGORI: SISTEM -->
            <div class="text-[11px] font-bold text-outline uppercase tracking-wider px-3 pt-4 pb-1">Sistem</div>

            <!-- Menu Baru: Log Aktivitas (Riwayat Barang) -->
            <a href="#" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('history.*') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">history</span>
                <span class="font-body-md text-body-md">Log Aktivitas</span>
            </a>

            <!-- Manajemen Pengguna (Hanya untuk Admin) -->
         
            <a href="#" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('users.*') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">manage_accounts</span>
                <span class="font-body-md text-body-md">Manajemen Pengguna</span>
            </a>
         

            <a href="#" class="flex items-center gap-x-3 px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('settings.*') ? 'bg-primary-container text-on-primary font-title-sm' : 'text-on-surface-variant hover:bg-surface-container hover:text-on-surface' }}">
                <span class="material-symbols-outlined text-[20px]">settings</span>
                <span class="font-body-md text-body-md">Pengaturan</span>
            </a>

        </nav>
    </div>
    
    <!-- Footer Sidebar (Terminal Kasir) -->
    <div class="px-4 pb-2">
        <div class="p-3 bg-surface-container rounded-xl flex items-center justify-between">
            <div class="flex items-center gap-x-2">
                <div class="w-2 h-2 rounded-full bg-primary animate-pulse"></div>
                <div class="flex flex-col">
                    <span class="font-label-sm text-label-sm text-on-surface-variant">Terminal Kasir #04</span>
                    <span class="font-data-mono text-data-mono text-on-surface font-semibold">192.168.1.42</span>
                </div>
            </div>
            <span class="material-symbols-outlined text-primary text-[18px]">wifi_tethering</span>
        </div>
    </div>
</aside>