<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
	//

	protected $fillable = ['id','user_id','name','details','description','price'];

    //
     
    public function tags(){

     	return $this->morphToMany('app\tag','taggable');


    }

    public function photos(){

    	return $this->morphMany('app\photo','imageable');


    }





}
