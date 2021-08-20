<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ormaawa;
use App\Models\User;

class daftar_ormawa extends Model
{
    use HasFactory;
    protected $table = 'daftar_ormawa';
    protected $guarded = [];
    public function User(){
        return $this->belongsTo(User::class, 'id_user');
    }
    public function ormawa(){
        return $this->belongsTo(ormawa::class, 'id_ormawa');
    }
    public $timestamps = false;
}
