<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ormawa;

class jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    protected $guarded = [];
    public function user(){
        return $this->hasMany(User::class, 'id');
    }
    public function ormawa(){
        return $this->hasMany(ormawa::class, 'id');
    }
    public $timestamps = false;
}
