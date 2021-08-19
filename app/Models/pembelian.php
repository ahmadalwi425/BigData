<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produk;
use App\Models\User;

class pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $guarded = [];
    public $timestamps = false;
    public function User(){
        return $this->belongsTo(User::class, 'id_pembeli');
    }
    public function produk(){
        return $this->belongsTo(produk::class, 'id_produk');
    }
}
