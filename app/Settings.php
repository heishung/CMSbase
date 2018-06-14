<?php
/**
 * Created by PhpStorm.
 * User: dangnv
 * Date: 10/28/17
 * Time: 2:46 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    public static function getSetting($key)
    {
        $value = Settings::where('key', $key)->first();

        if ($value) {
            $value = $value->value;
            $value = json_decode($value);
        } else {
            $value = new \stdClass();
        }

        return $value;
    }
}