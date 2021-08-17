<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\jurusan;
use App\Models\ormawa;

class ormawa extends Model
{
    use HasFactory;
    protected $table = 'ormawa';
    protected $guarded = [];
    public $timestamps = false;
    public function daftar_ormawa(){
        return $this->hasMany(daftar_ormawa::class, 'id');
    }
    public function jurusan(){
        return $this->belongsTo(jurusan::class, 'id_jurusan');
    }
}
