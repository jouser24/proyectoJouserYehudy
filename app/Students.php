<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Students extends Model
{
    public function Career(){
        return $this -> hasOne('App/Career', 'id');
    }
   

    public function user_type()
    {
        return $this -> belongsTo('App\UserType');
    }
}
