<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class EPerpusSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        // 1. USERS (Staff & Admin)
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Administrator', 'username' => 'admin', 'email' => 'admin@eperpus.com', 'password' => Hash::make('password'), 'role' => 'admin', 'is_active' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'Pustakawan Utama', 'username' => 'pustakawan', 'email' => 'pustakawan@eperpus.com', 'password' => Hash::make('password'), 'role' => 'pustakawan', 'is_active' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Super Administrator', 'username' => 'superadmin', 'email' => 'superadmin@eperpus.com', 'password' => Hash::make('password'), 'role' => 'super_admin', 'is_active' => 1, 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 2. SETTINGS
        DB::table('settings')->insert([
            ['key' => 'app_name', 'value' => 'E-Perpustakaan', 'description' => 'Nama Aplikasi', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'loan_duration', 'value' => '7', 'description' => 'Durasi peminjaman default (hari)', 'created_at' => $now, 'updated_at' => $now],
            ['key' => 'fine_per_day', 'value' => '1000', 'description' => 'Denda per hari keterlambatan', 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 3. KATEGORI BUKU
        DB::table('book_categories')->insert([
            ['id' => 1, 'name' => 'Fiksi', 'code' => 'FIC', 'ddc' => '800', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'Non-Fiksi', 'code' => 'NFI', 'ddc' => '000', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Pelajaran', 'code' => 'PLJ', 'ddc' => '300', 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 4. PENGARANG
        DB::table('authors')->insert([
            ['id' => 1, 'name' => 'Andrea Hirata', 'nationality' => 'Indonesia', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'Tere Liye', 'nationality' => 'Indonesia', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Pramoedya Ananta Toer', 'nationality' => 'Indonesia', 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 5. PENERBIT
        DB::table('publishers')->insert([
            ['id' => 1, 'name' => 'Gramedia Pustaka Utama', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'Mizan', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Bentang Pustaka', 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 6. BUKU (Master)
        DB::table('books')->insert([
            ['id' => 1, 'code' => 'BK-0001', 'title' => 'Laskar Pelangi', 'category_id' => 1, 'author_id' => 1, 'publisher_id' => 3, 'publish_year' => '2005', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'code' => 'BK-0002', 'title' => 'Bumi Manusia', 'category_id' => 1, 'author_id' => 3, 'publisher_id' => 1, 'publish_year' => '1980', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'code' => 'BK-0003', 'title' => 'Negeri 5 Menara', 'category_id' => 1, 'author_id' => 2, 'publisher_id' => 1, 'publish_year' => '2009', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'code' => 'BK-0004', 'title' => 'Atomic Habits', 'category_id' => 2, 'author_id' => 2, 'publisher_id' => 1, 'publish_year' => '2019', 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 7. EKSEMPLAR BUKU (Fisik)
        DB::table('book_copies')->insert([
            ['id' => 1, 'book_id' => 1, 'code' => 'BK-0001-01', 'condition' => 'baik', 'status' => 'tersedia', 'location' => 'Rak A1', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'book_id' => 1, 'code' => 'BK-0001-02', 'condition' => 'baik', 'status' => 'tersedia', 'location' => 'Rak A1', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'book_id' => 2, 'code' => 'BK-0002-01', 'condition' => 'baik', 'status' => 'tersedia', 'location' => 'Rak A1', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'book_id' => 3, 'code' => 'BK-0003-01', 'condition' => 'baik', 'status' => 'tersedia', 'location' => 'Rak A2', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'book_id' => 4, 'code' => 'BK-0004-01', 'condition' => 'baik', 'status' => 'tersedia', 'location' => 'Rak B1', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 6, 'book_id' => 4, 'code' => 'BK-0004-02', 'condition' => 'rusak', 'status' => 'perbaikan', 'location' => 'Rak B1', 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 8. ANGGOTA (Members)
        DB::table('members')->insert([
            ['id' => 1, 'code' => 'AGT-0001', 'name' => 'Ahmad Fauzi', 'member_type' => 'siswa', 'class' => 'X IPA 1', 'institution' => 'SMA Negeri 1', 'is_active' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'code' => 'AGT-0002', 'name' => 'Siti Nurhaliza', 'member_type' => 'siswa', 'class' => 'XI IPS 2', 'institution' => 'SMA Negeri 1', 'is_active' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'code' => 'AGT-0003', 'name' => 'Budi Santoso, S.Pd', 'member_type' => 'guru', 'institution' => 'SMA Negeri 1', 'is_active' => 1, 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 9. PEMINJAMAN (Loans)
        DB::table('loans')->insert([
            ['id' => 1, 'code' => 'PJM-001', 'member_id' => 1, 'loan_date' => '2026-07-08', 'due_date' => '2026-07-15', 'return_date' => '2026-07-12', 'total_books' => 2, 'status' => 'dikembalikan', 'created_by' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'code' => 'PJM-002', 'member_id' => 2, 'loan_date' => '2026-10-10', 'due_date' => '2026-10-17', 'status' => 'dipinjam', 'total_books' => 1, 'created_by' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'code' => 'PJM-003', 'member_id' => 3, 'loan_date' => '2026-06-01', 'due_date' => '2026-06-08', 'status' => 'terlambat', 'total_books' => 1, 'created_by' => 2, 'created_at' => $now, 'updated_at' => $now],
        ]);

        // 10. DETAIL PEMINJAMAN (Loan Details)
        DB::table('loan_details')->insert([
            ['id' => 1, 'loan_id' => 1, 'book_copy_id' => 1, 'condition_before' => 'baik', 'condition_after' => 'baik', 'status' => 'dikembalikan', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'loan_id' => 1, 'book_copy_id' => 4, 'condition_before' => 'baik', 'condition_after' => 'baik', 'status' => 'dikembalikan', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'loan_id' => 2, 'book_copy_id' => 2, 'condition_before' => 'baik', 'status' => 'dipinjam', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'loan_id' => 3, 'book_copy_id' => 3, 'condition_before' => 'baik', 'status' => 'dipinjam', 'created_at' => $now, 'updated_at' => $now],
        ]);
        
        // Update status buku yang sedang dipinjam
        DB::table('book_copies')->whereIn('id', [2, 3])->update(['status' => 'dipinjam']);
    }
}