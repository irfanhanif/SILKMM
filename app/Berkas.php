<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    //
    protected $table = 'berkas';
    protected $fillable = ['id_berkas','id_pelatihan','id_peserta','lokasi_berkas','status_berkas','nilai_berkas'];
}
