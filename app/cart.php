<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    //
    protected $table='cart';
    protected $fillable=['name','phone','email','id_product','address','data','created_at', 'updated_at'];
    protected $casts=[
        'data'=>'array'
    ];
}
