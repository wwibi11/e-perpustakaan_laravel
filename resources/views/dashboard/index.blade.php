@extends('layouts.app')

@section('title', 'Dashboard - E-Perpustakaan')

@section('content')
<!-- TOP GREETING BANNER & ACTION COMMAND STRIP -->
<section class="relative overflow-hidden rounded-xl bg-gradient-to-r from-primary via-primary-container to-tertiary-container text-on-primary shadow-md p-6">
    <div class="relative z-10 flex flex-col xl:flex-row xl:items-center justify-between gap-6">
        <div class="space-y-2">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-label-sm font-label-sm bg-surface-container-lowest/15 text-primary-fixed backdrop-blur-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-surface-bright mr-1.5 animate-pulse"></span>
                    Terminal Operasional Aktif
                </span>
                <span class="text-label-sm font-data-mono text-primary-fixed/80">Shift Pagi (07:30 - 15:30 WIB)</span>
            </div>
            <h1 class="text-headline-lg font-headline-lg text-on-primary tracking-tight">
                Selamat Bertugas, Pustakawan Utama
            </h1>
            <p class="text-body-md font-body-md text-surface-container-highest max-w-xl">
                Kamis, 16 Juli 2026 • Pantau status sirkulasi fisik, kepatuhan batas jatuh tempo, dan manajemen keterlambatan unit perpustakaan induk.
            </p>
        </div>
        <!-- Action Shortcut Buttons -->
       <!-- Action Shortcut Buttons -->
        <div class="flex flex-wrap items-center gap-2.5">
            <!-- Tombol Pinjam Baru -->
            <a href="{{ route('sirkulasi.index') }}" class="group flex items-center gap-2 h-10 px-4 rounded-lg bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm hover:bg-surface-container-low transition-all">
                <span class="material-symbols-outlined text-[18px] text-primary group-hover:rotate-90 transition-transform">add_circle</span>
                <span>+ Sirkulasi Pinjam Baru</span>
                <kbd class="px-1.5 py-0.5 rounded bg-surface-container text-on-surface font-data-mono text-label-sm">F1</kbd>
            </a>
            
            <!-- Tombol Pengembalian -->
            <a href="{{ route('sirkulasi.index') }}" class="group flex items-center gap-2 h-10 px-4 rounded-lg bg-surface-container-lowest/10 hover:bg-surface-container-lowest/20 text-on-primary font-label-md text-label-md backdrop-blur-sm transition-all">
                <span class="material-symbols-outlined text-[18px]">assignment_return</span>
                <span>Terima Pengembalian Buku</span>
                <kbd class="px-1.5 py-0.5 rounded bg-surface-container-lowest/20 text-on-primary font-data-mono text-label-sm">F2</kbd>
            </a>
            
            <!-- Tombol Pencarian -->
            <a href="{{ route('books.index') }}" class="group flex items-center gap-2 h-10 px-3.5 rounded-lg bg-surface-container-lowest/10 hover:bg-surface-container-lowest/20 text-on-primary font-label-md text-label-md backdrop-blur-sm transition-all">
                <span class="material-symbols-outlined text-[18px]">search</span>
                <span>Pencarian Buku</span>
                <kbd class="px-1.5 py-0.5 rounded bg-surface-container-lowest/20 text-on-primary font-data-mono text-label-sm">F3</kbd>
            </a>
        </div>
    </div>
    <!-- Subdued Decorative Element -->
    <div class="absolute -right-8 -bottom-10 w-64 h-64 rounded-full bg-primary-fixed/5 pointer-events-none blur-2xl"></div>
</section>

<!-- 4 KEY METRIC CARDS (KPI) - FROM SQL VIEW: dashboard_summary -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <!-- 1. Total Eksemplar Fisik -->
    <div class="bg-surface-container-lowest rounded-xl p-4 shadow-sm flex flex-col justify-between space-y-3">
        <div class="flex items-start justify-between">
            <div>
                <span class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider">Total Koleksi Fisik</span>
                <div class="flex items-baseline gap-1.5 mt-1">
                    <span class="text-headline-xl font-headline-xl text-on-surface">30</span>
                    <span class="text-body-md font-body-md text-on-surface-variant">Eksemplar</span>
                </div>
            </div>
            <div class="p-2.5 rounded-lg bg-surface-container text-primary">
                <span class="material-symbols-outlined text-[22px]">auto_stories</span>
            </div>
        </div>
        <!-- Ratio Bar Breakdown -->
        <div class="space-y-1.5 pt-1">
            <div class="h-2 w-full rounded-full bg-surface-container-high overflow-hidden flex">
                <div class="bg-surface-tint h-full" style="width: 90%" title="Tersedia (27)"></div>
                <div class="bg-primary h-full" style="width: 6.7%" title="Dipinjam (2)"></div>
                <div class="bg-error h-full" style="width: 3.3%" title="Rusak (1)"></div>
            </div>
            <div class="flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant pt-1">
                <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-surface-tint"></span> 27 Tersedia</span>
                <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-primary"></span> 2 Pinjam</span>
                <span class="flex items-center gap-1 text-error"><span class="w-2 h-2 rounded-full bg-error"></span> 1 Rusak</span>
            </div>
        </div>
    </div>
    
    <!-- 2. Sirkulasi Aktif -->
    <div class="bg-surface-container-lowest rounded-xl p-4 shadow-sm flex flex-col justify-between space-y-3">
        <div class="flex items-start justify-between">
            <div>
                <span class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider">Sirkulasi Berjalan</span>
                <div class="flex items-baseline gap-1.5 mt-1">
                    <span class="text-headline-xl font-headline-xl text-on-surface">2</span>
                    <span class="text-body-md font-body-md text-on-surface-variant">Peminjaman Aktif</span>
                </div>
            </div>
            <div class="p-2.5 rounded-lg bg-surface-container text-tertiary">
                <span class="material-symbols-outlined text-[22px]">published_with_changes</span>
            </div>
        </div>
        <div class="flex items-center gap-2 pt-2">
            <span class="px-2.5 py-1 rounded-md bg-surface-container-low text-on-surface text-label-sm font-label-sm flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-surface-tint"></span> 1 Sesuai Jadwal
            </span>
            <span class="px-2.5 py-1 rounded-md bg-error-container text-on-error-container text-label-sm font-label-sm flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-error animate-ping"></span> 1 Jatuh Tempo
            </span>
        </div>
    </div>

    <!-- 3. Keterlambatan & Alert -->
    <div class="bg-surface-container-lowest rounded-xl p-4 shadow-sm flex flex-col justify-between space-y-3">
        <div class="flex items-start justify-between">
            <div>
                <span class="text-label-sm font-label-sm text-error uppercase tracking-wider">Keterlambatan Kritis</span>
                <div class="flex items-baseline gap-1.5 mt-1">
                    <span class="text-headline-xl font-headline-xl text-error">1</span>
                    <span class="text-body-md font-body-md text-error">Anggota Overdue</span>
                </div>
            </div>
            <div class="p-2.5 rounded-lg bg-error-container text-on-error-container">
                <span class="material-symbols-outlined text-[22px]">warning</span>
            </div>
        </div>
        <div class="p-2 rounded-lg bg-error-container/40 flex items-center justify-between">
            <span class="text-label-sm font-label-sm text-on-surface truncate">Budi Santoso, S.Pd</span>
            <span class="text-label-sm font-data-mono font-semibold text-error">+24 Hari</span>
        </div>
    </div>

    <!-- 4. Total Denda Tertunggak -->
    <div class="bg-surface-container-lowest rounded-xl p-4 shadow-sm flex flex-col justify-between space-y-3">
        <div class="flex items-start justify-between">
            <div>
                <span class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider">Denda Belum Tertagih</span>
                <div class="flex items-baseline gap-1 mt-1">
                    <span class="text-headline-lg font-headline-lg font-data-mono text-on-surface">Rp 24.000</span>
                </div>
            </div>
            <div class="p-2.5 rounded-lg bg-surface-container text-primary">
                <span class="material-symbols-outlined text-[22px]">payments</span>
            </div>
        </div>
        <div class="flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant pt-2">
            <span>Tarif: Rp 1.000 / hari</span>
            <span class="text-error font-medium">Status: Belum Terbayar</span>
        </div>
    </div>
</section>

<!-- MAIN OPERATIONAL WORKSPACE (2/3 LEFT - 1/3 RIGHT) -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
    <!-- LEFT COLUMN (8 OF 12 COLS) -->
    <div class="lg:col-span-8 flex flex-col space-y-6">
        <!-- CRITICAL CALLOUT -->
        <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
            <div class="p-5 flex items-center justify-between bg-error-container/30">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-error text-on-error flex items-center justify-center">
                        <span class="material-symbols-outlined text-[20px]">notification_important</span>
                    </div>
                    <div>
                        <h2 class="text-headline-sm font-headline-sm text-on-surface">Peringatan Keterlambatan Sirkulasi</h2>
                        <p class="text-label-sm font-label-sm text-on-surface-variant">Tindakan segera dibutuhkan untuk peminjaman melewati toleransi pengembalian</p>
                    </div>
                </div>
                <span class="px-2.5 py-1 rounded-full text-label-sm font-label-sm bg-error text-on-error uppercase tracking-wider">Prioritas Tinggi</span>
            </div>
            <div class="p-5">
                <div class="rounded-xl bg-surface-container-low p-4 flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-16 bg-surface-container-highest rounded-lg flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary text-[28px]">book_2</span>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h3 class="text-title-md font-title-md text-on-surface">Ayat-Ayat Cinta</h3>
                                <span class="text-data-mono font-data-mono text-label-sm bg-surface-container-high px-1.5 py-0.5 rounded text-on-surface-variant">BK-0006-01</span>
                            </div>
                            <div class="flex flex-wrap items-center gap-y-1 gap-x-3 text-body-sm font-body-sm text-on-surface-variant">
                                <span class="flex items-center gap-1 text-on-surface font-title-sm">
                                    <span class="material-symbols-outlined text-[16px] text-primary">person</span> Budi Santoso, S.Pd
                                </span>
                                <span>•</span> <span>Guru Matematika</span> <span>•</span>
                                <span class="font-data-mono text-label-sm">0821-1223-3445</span>
                            </div>
                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2 text-label-sm font-label-sm">
                                <div>
                                    <span class="text-on-surface-variant block">Tanggal Pinjam:</span>
                                    <span class="font-data-mono text-on-surface">01 Jun 2026</span>
                                </div>
                                <div>
                                    <span class="text-on-surface-variant block">Jatuh Tempo:</span>
                                    <span class="font-data-mono text-error font-semibold">08 Jun 2026</span>
                                </div>
                                <div>
                                    <span class="text-on-surface-variant block">Akumulasi Denda:</span>
                                    <span class="font-data-mono text-error font-semibold text-body-md">Rp 24.000 <span class="text-label-sm">(24 Hari)</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row md:flex-col gap-2 shrink-0">
                        <button class="flex items-center justify-center gap-1.5 h-9 px-4 rounded-lg bg-surface-container-highest hover:bg-surface-container text-primary font-label-md text-label-md transition-colors" type="button">
                            <span class="material-symbols-outlined text-[18px]">chat</span> <span>Kirim WhatsApp</span>
                        </button>
                        <button class="flex items-center justify-center gap-1.5 h-9 px-4 rounded-lg bg-primary text-on-primary hover:bg-primary-container font-label-md text-label-md shadow-sm transition-colors" type="button">
                            <span class="material-symbols-outlined text-[18px]">fact_check</span> <span>Proses Pengembalian</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- RECENT CIRCULATION ACTIVITY TABLE -->
        <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
            <div class="p-5 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-[22px]">history</span>
                    <h2 class="text-headline-sm font-headline-sm text-on-surface">Aktivitas Sirkulasi Terkini</h2>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-label-sm font-label-sm text-on-surface-variant">Filter Status:</span>
                    <span class="px-2.5 py-1 rounded-md text-label-sm font-label-sm bg-surface-container text-on-surface font-medium cursor-pointer">Semua (4)</span>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-surface-container-low text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider">
                            <th class="py-3 px-4">Peminjam</th>
                            <th class="py-3 px-4">Judul Buku &amp; Barcode</th>
                            <th class="py-3 px-4">Waktu Transaksi</th>
                            <th class="py-3 px-4">Status &amp; Denda</th>
                            <th class="py-3 px-4 text-right">Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container-low text-body-md font-body-md text-on-surface">
                        <tr class="hover:bg-surface-container-low/60 transition-colors">
                            <td class="py-3.5 px-4">
                                <div class="font-title-sm text-title-sm text-on-surface">Budi Santoso, S.Pd</div>
                                <div class="text-label-sm font-label-sm text-on-surface-variant">NIP: 19820412-001</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <div class="font-medium text-on-surface">Ayat-Ayat Cinta</div>
                                <div class="font-data-mono text-label-sm text-on-surface-variant">BK-0006-01</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <div class="text-body-sm font-body-sm text-on-surface">01 Jun 2026</div>
                                <div class="text-label-sm font-data-mono text-error font-medium">Tempo: 08 Jun 2026</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <div class="inline-flex items-center px-2 py-0.5 rounded-full text-label-sm font-label-sm bg-error-container text-on-error-container">Terlambat 24h</div>
                                <div class="text-label-sm font-data-mono font-medium text-error mt-0.5">Rp 24.000</div>
                            </td>
                            <td class="py-3.5 px-4 text-right">
                                <button class="p-1 rounded text-primary hover:bg-surface-container" type="button">
                                    <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/60 transition-colors">
                            <td class="py-3.5 px-4">
                                <div class="font-title-sm text-title-sm text-on-surface">Siti Rahmawati</div>
                                <div class="text-label-sm font-label-sm text-on-surface-variant">NISN: 0078912344 (Kelas 12-IPA-1)</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <div class="font-medium text-on-surface">Laskar Pelangi</div>
                                <div class="font-data-mono text-label-sm text-on-surface-variant">BK-0001-02</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <div class="text-body-sm font-body-sm text-on-surface">12 Jul 2026</div>
                                <div class="text-label-sm font-data-mono text-on-surface-variant">Tempo: 19 Jul 2026</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-label-sm font-label-sm bg-surface-container-high text-primary">Dipinjam (Aktif)</span>
                                <div class="text-label-sm font-body-sm text-on-surface-variant mt-0.5">Sisa 3 Hari</div>
                            </td>
                            <td class="py-3.5 px-4 text-right">
                                <button class="p-1 rounded text-primary hover:bg-surface-container" type="button">
                                    <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/60 transition-colors">
                            <td class="py-3.5 px-4">
                                <div class="font-title-sm text-title-sm text-on-surface">Ahmad Fauzi</div>
                                <div class="text-label-sm font-label-sm text-on-surface-variant">NISN: 0089221190 (Kelas 11-IPS-2)</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <div class="font-medium text-on-surface">Bumi Manusia</div>
                                <div class="font-data-mono text-label-sm text-on-surface-variant">BK-0002-01</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <div class="text-body-sm font-body-sm text-on-surface">15 Jul 2026 14:10</div>
                                <div class="text-label-sm font-data-mono text-on-surface-variant">Pinjam: 08 Jul 2026</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-label-sm font-label-sm bg-surface-container text-on-surface-variant">Dikembalikan</span>
                                <div class="text-label-sm font-body-sm text-on-surface-variant mt-0.5">Tepat Waktu</div>
                            </td>
                            <td class="py-3.5 px-4 text-right">
                                <button class="p-1 rounded text-primary hover:bg-surface-container" type="button">
                                    <span class="material-symbols-outlined text-[20px]">receipt</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/60 transition-colors">
                            <td class="py-3.5 px-4">
                                <div class="font-title-sm text-title-sm text-on-surface">Dewi Lestari, S.Si</div>
                                <div class="text-label-sm font-label-sm text-on-surface-variant">NIP: 19890104-002</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <div class="font-medium text-on-surface">Fisika Terapan Lanjutan</div>
                                <div class="font-data-mono text-label-sm text-on-surface-variant">BK-0012-03</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <div class="text-body-sm font-body-sm text-on-surface">14 Jul 2026 09:30</div>
                                <div class="text-label-sm font-data-mono text-on-surface-variant">Pinjam: 02 Jul 2026</div>
                            </td>
                            <td class="py-3.5 px-4">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-label-sm font-label-sm bg-surface-container text-on-surface-variant">Dikembalikan</span>
                                <div class="text-label-sm font-data-mono text-on-surface-variant mt-0.5">Denda Lunas: Rp 5.000</div>
                            </td>
                            <td class="py-3.5 px-4 text-right">
                                <button class="p-1 rounded text-primary hover:bg-surface-container" type="button">
                                    <span class="material-symbols-outlined text-[20px]">receipt</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="p-3 bg-surface-container-low/40 flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant">
                <span>Menampilkan 4 transaksi sirkulasi terakhir</span>
                <a class="text-primary font-medium hover:underline flex items-center gap-1" href="#">Lihat Rekap Sirkulasi Lengkap <span class="material-symbols-outlined text-[16px]">arrow_forward</span></a>
            </div>
        </div>
    </div>

    <!-- RIGHT COLUMN (4 OF 12 COLS) -->
    <div class="lg:col-span-4 flex flex-col space-y-6">
        <!-- STATISTIK DISTRIBUSI KOLEKSI -->
        <div class="bg-surface-container-lowest rounded-xl p-5 shadow-sm space-y-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-[20px]">donut_large</span>
                    <h2 class="text-title-md font-title-md text-on-surface">Distribusi Koleksi Rak</h2>
                </div>
                <span class="text-label-sm font-data-mono text-on-surface-variant font-medium">30 Eks</span>
            </div>
            <div class="space-y-1.5">
                <div class="h-3 w-full rounded-full bg-surface-container-high overflow-hidden flex">
                    <div class="bg-primary h-full" style="width: 53.3%" title="Fiksi 53.3%"></div>
                    <div class="bg-surface-tint h-full" style="width: 26.7%" title="Pelajaran 26.7%"></div>
                    <div class="bg-tertiary-container h-full" style="width: 20.0%" title="Non-Fiksi 20.0%"></div>
                </div>
                <div class="text-label-sm font-label-sm text-on-surface-variant flex justify-between">
                    <span>Komposisi Klasifikasi DDC</span>
                    <span class="font-data-mono">100% Terpetakan</span>
                </div>
            </div>
            <div class="space-y-2.5 pt-1">
                <div class="flex items-center justify-between p-2.5 rounded-lg bg-surface-container-low">
                    <div class="flex items-center gap-2.5">
                        <span class="w-3 h-3 rounded bg-primary"></span>
                        <div>
                            <div class="font-title-sm text-title-sm text-on-surface">Koleksi Fiksi</div>
                            <div class="text-label-sm font-label-sm text-on-surface-variant">Sastra, Novel, Cerpen</div>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="font-title-sm text-title-sm text-on-surface">16 Eks</span>
                        <span class="block text-label-sm font-data-mono text-primary font-medium">53.3%</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-2.5 rounded-lg bg-surface-container-low">
                    <div class="flex items-center gap-2.5">
                        <span class="w-3 h-3 rounded bg-surface-tint"></span>
                        <div>
                            <div class="font-title-sm text-title-sm text-on-surface">Buku Pelajaran</div>
                            <div class="text-label-sm font-label-sm text-on-surface-variant">Kurikulum Nasional, Sains</div>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="font-title-sm text-title-sm text-on-surface">8 Eks</span>
                        <span class="block text-label-sm font-data-mono text-surface-tint font-medium">26.7%</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-2.5 rounded-lg bg-surface-container-low">
                    <div class="flex items-center gap-2.5">
                        <span class="w-3 h-3 rounded bg-tertiary-container"></span>
                        <div>
                            <div class="font-title-sm text-title-sm text-on-surface">Non-Fiksi &amp; Umum</div>
                            <div class="text-label-sm font-label-sm text-on-surface-variant">Pengembangan Diri, Riset</div>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="font-title-sm text-title-sm text-on-surface">6 Eks</span>
                        <span class="block text-label-sm font-data-mono text-tertiary font-medium">20.0%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- BUKU TERPOPULER -->
        <div class="bg-surface-container-lowest rounded-xl p-5 shadow-sm space-y-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-[20px]">trending_up</span>
                    <h2 class="text-title-md font-title-md text-on-surface">Buku Terpopuler</h2>
                </div>
                <span class="text-label-sm font-label-sm text-on-surface-variant">Bulan Ini</span>
            </div>
            <div class="space-y-3">
                <div class="flex items-center gap-3 p-2 rounded-lg hover:bg-surface-container-low transition-colors">
                    <span class="w-6 h-6 rounded-full bg-primary text-on-primary font-data-mono text-label-sm flex items-center justify-center font-bold">1</span>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-title-sm text-title-sm text-on-surface truncate">Laskar Pelangi</h3>
                        <p class="text-label-sm font-label-sm text-on-surface-variant truncate">Andrea Hirata • Rak FIC-04</p>
                    </div>
                    <div class="text-right shrink-0">
                        <span class="font-data-mono text-label-sm font-semibold text-primary">18x</span>
                        <span class="block text-[10px] text-on-surface-variant">Dipinjam</span>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-2 rounded-lg hover:bg-surface-container-low transition-colors">
                    <span class="w-6 h-6 rounded-full bg-surface-container-high text-on-surface font-data-mono text-label-sm flex items-center justify-center font-bold">2</span>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-title-sm text-title-sm text-on-surface truncate">Bumi Manusia</h3>
                        <p class="text-label-sm font-label-sm text-on-surface-variant truncate">Pramoedya A. Toer • Rak FIC-02</p>
                    </div>
                    <div class="text-right shrink-0">
                        <span class="font-data-mono text-label-sm font-semibold text-primary">14x</span>
                        <span class="block text-[10px] text-on-surface-variant">Dipinjam</span>
                    </div>
                </div>
                <div class="flex items-center gap-3 p-2 rounded-lg hover:bg-surface-container-low transition-colors">
                    <span class="w-6 h-6 rounded-full bg-surface-container-high text-on-surface font-data-mono text-label-sm flex items-center justify-center font-bold">3</span>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-title-sm text-title-sm text-on-surface truncate">Atomic Habits</h3>
                        <p class="text-label-sm font-label-sm text-on-surface-variant truncate">James Clear • Rak NF-01</p>
                    </div>
                    <div class="text-right shrink-0">
                        <span class="font-data-mono text-label-sm font-semibold text-primary">11x</span>
                        <span class="block text-[10px] text-on-surface-variant">Dipinjam</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ATURAN PERPUSTAKAAN AKTIF -->
        <div class="bg-surface-container-lowest rounded-xl p-5 shadow-sm space-y-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-[20px]">tune</span>
                    <h2 class="text-title-md font-title-md text-on-surface">Parameter Kebijakan Sirkulasi</h2>
                </div>
                <span class="w-2 h-2 rounded-full bg-surface-tint" title="Sistem Mengikuti Aturan Terkini"></span>
            </div>
            <div class="grid grid-cols-2 gap-2.5">
                <div class="p-2.5 rounded-lg bg-surface-container-low flex flex-col justify-between">
                    <span class="text-label-sm font-label-sm text-on-surface-variant">Durasi Pinjam</span>
                    <div class="text-title-md font-title-md text-on-surface font-data-mono mt-1">7 Hari</div>
                    <span class="text-[10px] text-on-surface-variant mt-0.5">Siswa &amp; Guru</span>
                </div>
                <div class="p-2.5 rounded-lg bg-surface-container-low flex flex-col justify-between">
                    <span class="text-label-sm font-label-sm text-on-surface-variant">Kapasitas Maks</span>
                    <div class="text-title-md font-title-md text-on-surface font-data-mono mt-1">3 Buku</div>
                    <span class="text-[10px] text-on-surface-variant mt-0.5">Per anggota aktif</span>
                </div>
                <div class="p-2.5 rounded-lg bg-surface-container-low flex flex-col justify-between">
                    <span class="text-label-sm font-label-sm text-on-surface-variant">Tarif Denda</span>
                    <div class="text-title-md font-title-md text-on-surface font-data-mono text-error mt-1">Rp 1.000</div>
                    <span class="text-[10px] text-on-surface-variant mt-0.5">Per hari telat</span>
                </div>
                <div class="p-2.5 rounded-lg bg-surface-container-low flex flex-col justify-between">
                    <span class="text-label-sm font-label-sm text-on-surface-variant">Perpanjangan</span>
                    <div class="text-title-md font-title-md text-on-surface font-data-mono mt-1">Maks 1x</div>
                    <span class="text-[10px] text-on-surface-variant mt-0.5">Sebelum jatuh tempo</span>
                </div>
            </div>
            <div class="flex items-center justify-between pt-1">
                <span class="text-label-sm font-data-mono text-on-surface-variant">Config: POL-CIRC-2026</span>
                <button class="text-label-sm font-label-sm text-primary hover:underline" type="button">Ubah Pengaturan</button>
            </div>
        </div>
    </div>
</div>
@endsection