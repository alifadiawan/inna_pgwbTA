<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class x extends Model
{
    // only use for seeder
    
    use HasFactory;
    protected $guarded = [];
    protected $table = 'ekstrakulikuler_anggota';
}
