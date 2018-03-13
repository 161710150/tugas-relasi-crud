<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    protected $table = 'ortus';
    protected $fillable = ['Nama','Jenis_Kelamin','Usia','id_siswas'];
    public function siswa(){
    	return $this->belongsTo('App\Siswa', 'id_siswas');
    }
    public $timestamp = true;
}
