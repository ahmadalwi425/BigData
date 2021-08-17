<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\divisi;

class subdivisi extends Model
{
    use HasFactory;
    protected $table = 'subdivisi';
    protected $guarded = [];
    public function divisi(){
        return $this->belongsTo(divisi::class, 'id_divisi');
    }
    public $timestamps = false;
}
