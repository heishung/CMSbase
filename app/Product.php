<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }

    public function packages()
    {
        return $this->hasMany('App\ProductPackage', 'product_id')->orderBy('price');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function priceText()
    {
        $first = $this->packages->first();
        if ($first) {
            return productPrice($first->price, 'vnd');
        }
        return "Liên hệ";
    }
}
