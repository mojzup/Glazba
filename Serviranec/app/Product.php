<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{


    protected $fillable = ['imagePath', 'artist_id',  'ime', 'leto', 'cena', 'format',  'opis'];

    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
     public function songs()
    {
        return $this->hasMany('App\Song');
    }
}
