<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\PetugasBorrowing;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class PborrowingController extends Controller
{

    public function index(){
        $pborrowings = PetugasBorrowing::latest()->with('getDataBookP', 'getDataPT')->paginate(5);
        return view('Pborrowings.index', compact('pborrowings'));
    }

    public function show($id_borrowing){
        $pborrowings = PetugasBorrowing::with('getDataBookP', 'getDataPT')->where('id', $id_borrowing)->firstOrFail();
        return view('Pborrowings.show', compact('pborrowings'));
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
            $pborrowing = PetugasBorrowing::where('id_buku', $book->id)->first();
            if($pborrowing){
                $pborrowing->update([
                    'id_petugas' => Auth::guard('petugas')->user()->id,
                    'tgl_pengembalian' => $request->tgl_pengembalian,
                ]);
            }else{
                PetugasBorrowing::create([
                    'id_buku' => $book->id,
                    'id_petugas' => Auth::guard('petugas')->user()->id,
                    'tgl_peminjaman' => now(),
                    'tgl_pengembalian' => $request->tgl_pengembalian,
                ]);
            }
            Toastr::success('Anda Berhasil Meminjam buku', 'Selamat', ["positionClass" => "toast-top-right"]);
            return redirect()->route('routeB.index')->with('success');
        }
        return back()->with('error');
    }
}
