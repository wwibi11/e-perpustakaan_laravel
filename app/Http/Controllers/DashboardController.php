<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Statistik Eksemplar Fisik
        $totalCopies = DB::table('book_copies')->count();
        $availableCopies = DB::table('book_copies')->where('status', 'tersedia')->count();
        $borrowedCopies = DB::table('book_copies')->where('status', 'dipinjam')->count();
        $damagedCopies = DB::table('book_copies')->where('condition', 'rusak')->count();

        // Hitung persentase untuk progress bar
        $percentAvailable = $totalCopies > 0 ? round(($availableCopies / $totalCopies) * 100, 1) : 0;
        $percentBorrowed = $totalCopies > 0 ? round(($borrowedCopies / $totalCopies) * 100, 1) : 0;
        $percentDamaged = $totalCopies > 0 ? round(($damagedCopies / $totalCopies) * 100, 1) : 0;

        // 2. Sirkulasi Berjalan
        $activeLoans = DB::table('loans')->whereIn('status', ['dipinjam', 'terlambat'])->count();
        $onTimeLoans = DB::table('loans')->where('status', 'dipinjam')->where('due_date', '>=', Carbon::today())->count();
        $overdueLoans = DB::table('loans')->where('status', 'terlambat')->orWhere(function($q) {
            $q->where('status', 'dipinjam')->where('due_date', '<', Carbon::today());
        })->count();

        // 3. Data Keterlambatan Kritis (Ambil 1 data terlambat terbaru)
        $criticalLoan = DB::table('loans')
            ->join('members', 'loans.member_id', '=', 'members.id')
            ->select('loans.*', 'members.name as member_name')
            ->where('loans.status', 'terlambat')
            ->orWhere(function($q) {
                $q->where('loans.status', 'dipinjam')->where('loans.due_date', '<', Carbon::today());
            })
            ->orderBy('loans.due_date', 'asc')
            ->first();
            
        $daysOverdue = 0;
        if ($criticalLoan) {
            $daysOverdue = Carbon::parse($criticalLoan->due_date)->diffInDays(Carbon::today());
        }

        // 4. Denda (Hardcode sementara karena data denda di database dummy Anda 0)
        $totalFines = DB::table('loans')->sum('fine_amount'); // Ambil dari DB
        
        // 5. Aktivitas Sirkulasi Terkini (Ambil 4 data terbaru)
        $recentLoans = DB::table('loans')
            ->join('members', 'loans.member_id', '=', 'members.id')
            ->select('loans.*', 'members.name as member_name', 'members.identity_number')
            ->orderBy('loans.created_at', 'desc')
            ->limit(4)
            ->get();

        return view('dashboard.index', compact(
            'totalCopies', 'availableCopies', 'borrowedCopies', 'damagedCopies',
            'percentAvailable', 'percentBorrowed', 'percentDamaged',
            'activeLoans', 'onTimeLoans', 'overdueLoans',
            'criticalLoan', 'daysOverdue', 'totalFines', 'recentLoans'
        ));
    }
}