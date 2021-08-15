<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\jenis_kal;
use App\Models\tahun_ajar;

class kal_akademik extends Model
{
    use HasFactory;
    protected $table = 'kal_akademik';
    protected $guarded = [];
    public function jenis_kal(){
        return $this->belongsTo(jenis_kal::class, 'id_jenis_kal');
    }
    public function tahun_ajar(){
        return $this->belongsTo(tahun_ajar::class, 'id_tahun_ajar');
    }
}

