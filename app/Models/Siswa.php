<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'user_id',
    'jenis_kelamin', 'agama', 'alamat', 'kelas', 'profile'];

    public function getProfile(){
        if($this->profile){
            return asset('images/'.$this->profile);
        }else{
        return asset('images/default.jpg');
        }
    }

    public function mapel(){
        return $this->belongsToMany('App\Models\Mapel')->withPivot(['nilai'])->withTimeStamps();
    }
}
 