<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
<<<<<<< HEAD
    
=======
>>>>>>> 13e2931375ecac1bee588203ec36b346b95d720b
    public function products()
    {
      return $this->belongsToMany('App\Product');
    }
}
