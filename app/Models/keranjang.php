<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produk;
use App\Models\User;

class keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';
    protected $guarded = [];
    public $timestamps = false;
    public function User(){
        return $this->belongsTo(User::class, 'id_user');
    }
    public function produk(){
        return $this->belongsTo(produk::class, 'id_produk');
    }
}
