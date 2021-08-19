<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\level;
use App\Models\jurusan;
use App\Models\daftar_ormawa;
use App\Models\peminjaman;
use App\Models\produk;
use App\Models\penjualan;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'nim',
        'no_hp',
        'id_level',
        'id_jurusan',
        'email',
        'password',
    ];
    public function level(){
        return $this->belongsTo(level::class, 'id_level');
    }
    public function jurusan(){
        return $this->belongsTo(jurusan::class, 'id_jurusan');
    }
    public function daftar_ormawa(){
        return $this->hasMany(daftar_ormawa::class, 'id');
    }
    public function peminjaman(){
        return $this->hasMany(peminjaman::class, 'id');
    }
    public function pembelian(){
        return $this->hasMany(pembelian::class, 'id');
    }
    public function produk(){
        return $this->hasMany(produk::class, 'id');
    }
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
