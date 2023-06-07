<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;
    protected $table = 'gaji';
    protected $guarded = [];

    public function pegawai(){
        return $this->belongsTo(Pegawai::class);
    }

    public function tunjangan(){
        return $this->belongsTo(Tunjangan::class);
    }
}
