<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Product extends Model
{
<<<<<<< HEAD
     use SearchableTrait, Searchable;

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

=======
>>>>>>> 13e2931375ecac1bee588203ec36b346b95d720b
    public function categories()
    {
      return $this->belongsToMany('App\Category');
    }

<<<<<<< HEAD

=======
>>>>>>> 13e2931375ecac1bee588203ec36b346b95d720b
    public function presentPrice(){
      return money_format('$%i ', $this->price / 100);
    }
    public function scopeMightAlsoLike($query){
      return $query->inRandomOrder()->take(6);
    }
}
