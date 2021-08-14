<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kal_akademik;

class jenis_kal extends Model
{
    use HasFactory;
    protected $table = 'jenis_kal';
    protected $guarded = [];
    public function kal_akademik(){
        return $this->hasMany(kal_akademik::class, 'id');
    }
}
