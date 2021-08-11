<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\buletin;

class kategori_buletin extends Model
{
    use HasFactory;
    protected $table = 'kategori_buletin';
    protected $guarded = [];
    public function buletin(){
        return $this->hasMany(buletin::class, 'id');
    }
}
