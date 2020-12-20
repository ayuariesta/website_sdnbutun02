<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'deskripsi', 'gambar'];

    public function getGambar(){
        if($this->gambar){
            return asset('images/'.$this->gambar);
        }else{
        return asset('images/default.jpg');
        }
    }
}
