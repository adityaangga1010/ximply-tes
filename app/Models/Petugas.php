<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Petugas extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'petugas';
    protected $fillable = [
        'nama_petugas',
        'username',
        'password',
    ];

    public function petugas(){
        return $this->belongsTo(Book::class, 'id', 'id');
    }

    public function getDataPetugass(){
        return $this->hasMany(PetugasBorrowing::class, 'id_petugas', 'id');
    }
}
