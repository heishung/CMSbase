<?php
/**
 * Created by PhpStorm.
 * User: dangnv
 * Date: 10/27/17
 * Time: 2:18 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class ProductPackage extends Model
{
    function product()
    {
        $this->hasOne('Product', 'product_id');
    }

    function getNameAttribute($value)
    {
        return $this->volume . '' . $this->volume_unit;
    }
}