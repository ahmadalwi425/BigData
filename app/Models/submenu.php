<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subdivisi;

class submenu extends Model
{
    use HasFactory;
    protected $table = 'submenu';
    protected $guarded = [];
    public function subdivisi(){
        return $this->belongsTo(subdivisi::class, 'id_subdiv');
    }
    public $timestamps = false;
}
