<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstrakulikuler extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'ekstrakulikuler';

    public function siswa(){
        return $this->belongsToMany(siswa::class,'ekstrakulikuler_anggota','anggota_id','ekstrakulikuler_id');
    }


}
