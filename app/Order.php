<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = ['user_id','produck_id',];



    public function produck(){

        return $this->hasMany('App\Produck');


    }


    public function UserOrder(){

              
        return $this->produck;


    }
    
}
