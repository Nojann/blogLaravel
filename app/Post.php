<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    public function author()
   {
       return $this->belongsTo('App\User','post_author');
   }
    
}
