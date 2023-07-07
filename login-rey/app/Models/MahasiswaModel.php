<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;

    protected $table = 'student';
    protected $primaryKey = 'ID_Mahasiswa';
    protected $fillable = ['NIM', 'Nama_Mahasiswa', 'Jurusan'];

}
