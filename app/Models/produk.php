<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\jenis_produk;

class produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $guarded = [];
    public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class, 'id_penjual');
    }
    public function jenis_produk(){
        return $this->belongsTo(jenis_produk::class, 'id_jenis_produk');
    }
}
