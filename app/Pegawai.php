<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $primaryKey='id_pegawai';
    protected $table = 'pegawai';
    protected $fillable=[
        'id_pegawai','nama','nohp','email',
        'gambar','jkelamin','alamat', 'user_id'
    ];
}
