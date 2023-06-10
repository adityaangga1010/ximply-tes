<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Masyarakat extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'masyarakats';
    protected $fillable = [
        'nama',
        'telp',
        'email',
        'username',
        'password',
        'jenis_kelamin',
    ];

    public function book(){
        return $this->belongsTo(Book::class, 'id', 'id');
    }

    public function getDataBR(){
        return $this->hasMany(Borrowing::class, 'id_masyarakat', 'id');
    }
}
