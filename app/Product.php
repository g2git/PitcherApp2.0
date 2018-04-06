<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Product extends Model
{
<<<<<<< HEAD
     use SearchableTrait, Searchable;
=======
>>>>>>> c686f4798b78e89b393ff3dcc71e993bc7e37d74

    protected $searchable = [
    /**
     * Columns and their priority in search results.
     * Columns with higher values are more important.
     * Columns with equal values have equal importance.
     *
     * @var array
     */
    'columns' => [
        'products.name' => 10,
        'products.details' => 5,
        'products.description' => 2,
    ],
];

    public function categories()
    {
      return $this->belongsToMany('App\Category');
    }

    public function presentPrice(){
      return money_format('$%i ', $this->price / 100);
    }
    public function scopeMightAlsoLike($query){
      return $query->inRandomOrder()->take(6);
    }
}
