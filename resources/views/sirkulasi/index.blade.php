@extends('layouts.app')

@section('title', 'Meja Sirkulasi - E-Perpustakaan')

@section('content')
<!-- Banner Atas -->
<div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm mb-6 flex justify-between items-center">
    <div>
        <h1 class="text-headline-md font-headline-md text-primary">Meja Sirkulasi</h1>
        <p class="text-body-md text-on-surface-variant mt-1">Kelola peminjaman dan pengembalian buku.</p>
    </div>
    <button class="flex items-center gap-2 bg-primary text-on-primary px-4 py-2 rounded-lg font-label-md shadow-sm hover:bg-primary-container transition-colors">
        <span class="material-symbols-outlined text-[20px]">add_circle</span>
        Peminjaman Baru
    </button>
</div>

<!-- Konten Kosong (Placeholder) -->
<div class="bg-surface-container-lowest rounded-xl p-10 text-center shadow-sm border-2 border-dashed border-surface-container-high">
    <span class="material-symbols-outlined text-[48px] text-outline mb-3">qr_code_scanner</span>
    <h2 class="text-title-md font-title-md text-on-surface">Belum Ada Transaksi</h2>
    <p class="text-body-md text-on-surface-variant mt-1">Silakan scan barcode buku atau cari anggota untuk memulai peminjaman.</p>
</div>
@endsection