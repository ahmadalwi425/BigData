<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kal_akademik;

class tahun_ajar extends Model
{
    use HasFactory;
    protected $table = 'tahun_ajar';
    protected $guarded = [];
    public function kal_akademik(){
        return $this->hasMany(kal_akademik::class, 'id');
    }
}
