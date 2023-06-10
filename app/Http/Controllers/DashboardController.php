<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalMasyarakat = Masyarakat::count();
        $totalTersedia = book::where('status', 'tersedia')->count();
        $totalDipinjam = book::where('status', 'dipinjam')->count();
        $totalBook = Book::count();

        return view('Dashboard', compact('totalMasyarakat', 'totalBook', 'totalTersedia', 'totalDipinjam'));
    }
}
