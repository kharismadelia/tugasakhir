<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey='id';
    protected $table = 'customers';
    protected $fillable=[
        'id','name','phone',
        'address','email'
    ];
}
