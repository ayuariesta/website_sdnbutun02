<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelSiswa extends Model
{
    use HasFactory;
    /*
    || Informasi table
    */
    protected $table = 'mapel_siswa';
    protected $primaryKey = 'id';
    /*
    || Table fillable untuk CRUD
    */
    protected $fillable = [
        'mapel_id', 'siswa_id', 'nilai'
    ];
}
