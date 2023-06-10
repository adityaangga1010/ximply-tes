<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class BorrowingController extends Controller
{

    public function index(){
        $borrowings = Borrowing::latest()->with('getDataBook', 'getDataMR')->paginate(5);
        return view('Borrowings.index', compact('borrowings'));
    }

    public function show($id_borrowing){
        $borrowings = Borrowing::with('getDataBook', 'getDataMR')->where('id', $id_borrowing)->firstOrFail();
        return view('Borrowings.show', compact('borrowings'));
    }

    public function store(Request $request , $id_buku){
        $request->validate([
            'tgl_peminjaman' => now(),
            'tgl_pengembalian' => 'required'
        ]);

        $book = Book::where('id', $id_buku)->first();
        if($book){
            $book->update([
                'status' => 'dipinjam',
            ]);
            $borrowing = Borrowing::where('id_buku', $book->id)->first();
            if($borrowing){
                $borrowing->update([
                    'id_masyarakat' => Auth::guard('masyarakat')->user()->id,
                    'tgl_pengembalian' => $request->tgl_pengembalian,
                ]);
            }else{
                Borrowing::create([
                    'id_buku' => $book->id,
                    'id_masyarakat' => Auth::guard('masyarakat')->user()->id,
                    'tgl_peminjaman' => now(),
                    'tgl_pengembalian' => $request->tgl_pengembalian,
                ]);
            }
            Toastr::success('Anda Berhasil Meminjam buku', 'Selamat', ["positionClass" => "toast-top-right"]);
            return redirect()->route('routeB.index')->with('success');
        }
        return back()->with('error');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $borrowings = Borrowing::where('id_buku', 'LIKE', "%$search%")
            ->orWhere('tgl_peminjaman', 'LIKE', "%$search%")
            ->orWhere('tgl_pengembalian', 'LIKE', "%$search%")
            ->orWhere('id_buku', 'LIKE', "%$search%")
            ->get();
        return view('Borrowings.index', compact('borrowings'));
    }
}
