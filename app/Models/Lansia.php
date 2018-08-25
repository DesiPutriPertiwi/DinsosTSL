<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lansia extends Model
{
    protected $table = 'bansos_lansia';
    protected $fillable = ['id_lansia', 'nama', 'alamat'];
    public $timestamps = false;
 
    // public function topik() {
    //     return $this->hasMany('App\Models\Topik');
    // }
}
