<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $guarded = [];
    public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
