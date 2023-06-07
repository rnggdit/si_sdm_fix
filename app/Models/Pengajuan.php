<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuan';
    protected $guarded = [];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class);
    }

    public function ijin(){
        return $this->belongsTo(Ijin::class);
    }
}
