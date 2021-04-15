<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis', 'nama', 'jk', 'tempat_lahir', 'tanggal_lahir', 
        'alamat', 'asal_sekolah', 'kelas', 'jurusan'
    ];
}
