<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'telepon', 'alamat','profile','user_id'];

    public function mapel(){
        return $this->hasMany('App\Models\Mapel');
    }

    public function getProfile(){
        if($this->profile){
            return asset('images/'.$this->profile);
        }else{
        return asset('images/default.jpg');
        }
    }
}
