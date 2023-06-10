<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetugasBorrowing extends Model
{
    use HasFactory;
    protected $table = 'petugas_borrowings';
    protected $fillable = [
        'id_buku',
        'id_petugas',
        'tgl_peminjaman',
        'tgl_pengembalian',
    ];

    public function getDataBookP(){
        return $this->belongsTo(Book::class, 'id_buku', 'id');
    }

    public function getDataPT(){
        return $this->belongsTo(Petugas::class, 'id_petugas', 'id');
    }
}
