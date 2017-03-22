<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    //
     public function estados(){
        return $this->BelongsTo('App\Cidade');
    }
}
