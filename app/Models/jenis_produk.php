<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produk;

class jenis_produk extends Model
{
    use HasFactory;
    protected $table = 'jenis_produk';
    protected $guarded = [];
    public $timestamps = false;
    public function produk(){
        return $this->hasMany(produk::class, 'id');
    }
}
