<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Produck extends Model
{
	//

	protected $fillable = ['id','user_id','name','data'];


    //
     
    public function tags(){

     	return $this->morphToMany('app\tag','taggable');


    }

    public function photos(){

    	return $this->morphMany('app\photo','imageable');


    }





}
