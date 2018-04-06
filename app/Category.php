<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
<<<<<<< HEAD
  

=======
>>>>>>> c686f4798b78e89b393ff3dcc71e993bc7e37d74
    public function products()
    {
      return $this->belongsToMany('App\Product');
    }
}
