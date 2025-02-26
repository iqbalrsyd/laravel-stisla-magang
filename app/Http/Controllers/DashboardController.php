<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MsCabang;
use App\Models\DtPenjualan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCabang = MsCabang::count();
        $totalPenjualan = DtPenjualan::sum('nominal');

        $cabangTerbanyak = MsCabang::withSum('penjualan', 'nominal')
            ->orderByDesc('penjualan_sum_nominal')
            ->first();

        return view('pages.dashboard', compact('totalCabang', 'totalPenjualan', 'cabangTerbanyak'));
    }
}
