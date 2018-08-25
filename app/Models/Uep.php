<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uep extends Model
{
    protected $table = 'bansos_uep';
    protected $fillable = ['id_uep', 'nama', 'nik', 'alamat', 'ttl', 'jenis_kelamin', 'usaha'];
    public $timestamps = false;
 
    // public function topik() {
    //     return $this->hasMany('App\Models\Topik');
    // }
}
