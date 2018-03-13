<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';
    protected $fillable = ['Nama_Guru','Mata_Pelajaran'];
    public function guru(){
    	return $this->hasMany('App\Siswa','id_guru');
    }
    public $timestamp = true;
}
