<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kal_akademik;

class semester extends Model
{
    use HasFactory;
    protected $table = 'semester';
    public function kal_akademik(){
        return $this->hasMany(kal_akademik::class, 'id');
    }
    public $timestamps = false;
}
