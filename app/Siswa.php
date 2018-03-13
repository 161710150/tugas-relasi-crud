<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['Nama','Sekolah','Jenis_Kelamin','id_guru'];
    public function siswa(){
    	return $this->hasOne('App\Ortu', 'id_siswas');
    }
    public function guru(){
    	return $this->belongsTo('App\Guru','id_guru');
    }
    public $timestamp = true;
}
