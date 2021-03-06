<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['imagePath', 'ime', 'izvor', 'leta', 'zalozba', 'clani', 'exclani', 'spletna'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
