<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;
    protected $table = 'borrowings';
    protected $fillable = [
        'id_buku',
        'id_masyarakat',
        'tgl_peminjaman',
        'tgl_pengembalian',
    ];

    public function getDataBook(){
        return $this->belongsTo(Book::class, 'id_buku', 'id');
    }

    public function getDataMR(){
        return $this->belongsTo(Masyarakat::class, 'id_masyarakat', 'id');
    }
}
