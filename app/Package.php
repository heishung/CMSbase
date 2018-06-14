<?php
/**
 * Created by PhpStorm.
 * User: dangnv
 * Date: 10/28/17
 * Time: 10:18 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    function getNameAttribute($value)
    {
        return $this->volume . '' . $this->unit;
    }

}