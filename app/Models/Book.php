<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = [
        'judul',
        'penulis',
        'pengarang',
        'tahun_terbit',
        'jumblah_halaman',
        'kategori',
        'status',
    ];

    public function getDataMasyarakat(){
        return $this->belongsTo(Masyarakat::class, 'id', 'id');
    }

    public function getDataPetugas(){
        return $this->belongsTo(Petugas::class, 'id', 'id');
    }

    public function getDataBorrowing(){
        return $this->belongsTo(Borrowing::class, 'id', 'id_buku');
    }

    public function getDataBorrowingP(){
        return $this->belongsTo(PetugasBorrowing::class, 'id', 'id_buku');
    }

}
