<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembangan extends Model
{
    use HasFactory;
    protected $table = 'pengembangan';
    protected $guarded = [];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class);
    }

    public function pendidikan(){
        return $this->belongsTo(Pendidikan::class);
    }
}
