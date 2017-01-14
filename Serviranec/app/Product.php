<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['imagePath', 'artist_id', 'zanr_id', 'ime', 'leto', 'cena', 'format', 'dobavljivost', 'opis'];
}
