<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $guarded = [];

    public function absensi(){
        return $this->hasMany(Absensi::class);
    }

    public function gaji(){
        return $this->hasMany(Gaji::class);
    }

    public function pengajuan(){
        return $this->hasMany(Pengajuan::class);
    }

    public function pengembangan(){
        return $this->hasMany(Pengembangan::class);
    }

    public function pengguna(){
        return $this->hasMany(Pengguna::class);
    }
}
