<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kategori_buletin;

class buletin extends Model
{
    use HasFactory;
    protected $table = 'buletin';
    protected $guarded = [];
    public function kategori_buletin(){
        return $this->belongsTo(kategori_buletin::class, 'id_kategori_buletin');
    }
}
