<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    protected $table = 'bansos_anak';
    protected $fillable = ['id_anak', 'nama','alamat'];
    public $timestamps = false;
 
    // public function topik() {
    //     return $this->hasMany('App\Models\Topik');
    // }
}
