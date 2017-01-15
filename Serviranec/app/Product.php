<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
	use Searchable;

    protected $fillable = ['imagePath', 'artist_id', 'zanr_id', 'ime', 'leto', 'cena', 'format', 'dobavljivost', 'opis'];
}
