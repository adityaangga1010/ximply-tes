<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use App\Models\PetugasBorrowing;
use Brian2694\Toastr\Facades\Toastr;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('Books.index', compact('books'));
    }

    public function store(Request $request){
        $create = Book::create([
            'judul' => $request['judul'],
            'penulis' => $request['penulis'],
            'pengarang' => $request['pengarang'],
            'tahun_terbit' => $request['tahun_terbit'],
            'jumblah_halaman' => $request['jumblah_halaman'],
            'kategori' => $request['kategori'],
        ]);
        if($create){
            Toastr::success('Data Berhasil di Tambah', 'OK', ["positionClass" => "toast-top-right"]);
            return redirect()->route('routeB.index')->with('success');
        }
    }

    public function show($id_book){
        $books = Book::with('getDataMasyarakat')->where('id', $id_book)->firstOrFail();
        if($books->status == ''){
            return redirect()->back();
        }

        $borrowing = Borrowing::where('id_buku', $id_book)->first();
        if($borrowing){
            return view('Books.show', compact('books', 'borrowing'));
        }
        return view('Books.show', compact('books'));
    }

    public function shows($id_book){
        $books = Book::with('getDataPetugas')->where('id', $id_book)->firstOrFail();
        if($books->status == ''){
            return redirect()->back();
        }

        $pborrowing = PetugasBorrowing::where('id_buku', $id_book)->first();
        if($pborrowing){
            return view('Books.show', compact('books', 'pborrowing'));
        }
        return view('Books.show', compact('books'));
    }

    public function update(Request $request , $id_book){
        $books = Book::find($id_book);
        $update = $books->update([
            'judul' => $request['judul'],
            'penulis' => $request['penulis'],
            'pengarang' => $request['pengarang'],
            'tahun_terbit' => $request['tahun_terbit'],
            'jumblah_halaman' => $request['jumblah_halaman'],
            'kategori' => $request['kategori'],
        ]);
        if($update){
            Toastr::info('Data Berhasil di Ubah', 'OK', ["positionClass" => "toast-top-right"]);
            return redirect()->route('routeB.index')->with('success');
        }
    }

    public function destroy($id_book){
        $books = Book::find($id_book);
        $books->delete();

        Toastr::error('Data Berhasil di hapus', 'OK', ["positionClass" => "toast-top-right"]);
        return redirect()->route('routeB.index')->with('success');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $books = Book::where('judul', 'LIKE', "%$search%")
            ->orWhere('penulis', 'LIKE', "%$search%")
            ->orWhere('pengarang', 'LIKE', "%$search%")
            ->orWhere('tahun_terbit', 'LIKE', "%$search%")
            ->orWhere('jumblah_halaman', 'LIKE', "%$search%")
            ->orWhere('kategori', 'LIKE', "%$search%")
            ->get();
        return view('Books.index', compact('books'));
    }

    // public function verif($id){
    //     $books = Book::where('id', $id)->firstOrFail();
    //     $books->update([
    //         'status' => 'dipinjam',
    //     ]);

    //     Toastr::warning('Data Sudah Di Verifikasi', 'OK', ["positionClass" => "toast-top-right"]);
    //     return redirect()->route('routeB.index');
    // }
}
