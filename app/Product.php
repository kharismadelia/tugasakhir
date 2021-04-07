<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey='id';
    protected $table = 'products';
    protected $fillable=[
        'id','deskripsi','harga',
        'gambar','lebar','panjang','tinggi', 'berat',
        'nama_produk'
    ];
}
