<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Song extends Model
{

      protected $fillable = ['product_id',  'ime', 'dolzina'];

    public function products()
    {
        return $this->belongsTo('App\Product');
    }
}
