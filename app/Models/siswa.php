<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $table = 'siswas';

    public function ekskul(){
        return $this->belongsToMany(ekstrakulikuler::class,'ekstrakulikuler_anggota','ekstrakulikuler_id','anggota_id');
    }
}
