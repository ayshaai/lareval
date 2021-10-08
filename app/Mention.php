<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mention extends Model
{
      // to show relationshops  mention and user
      public function user(){
        return $this->belongsTo(User::class);
        
            }
}
