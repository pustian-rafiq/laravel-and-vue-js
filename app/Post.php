<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// ekhane post tbale theke user table k access kora hoice ajonno belongsTo use korce,,,avabe ekta table theke onno table access korte hoile belongsTo use korbo
    public function category(){
    	return $this->belongsTo(Category::class);
    	//return $this->belongsTo(Category::class,'cat_id');
    	
    	//jodi post table cat_id thake and tbale name hoi categories tahole must be foreign key cat_id bole dite hbe nahoile null dekhabe,,,,but jodi jodi table name categories hoi and foreign key category_id hoi tahole foreign key bole daua lagbe na
    	// table name jodi plural and tar foreign key jodi singular name hoi tahole relationship a foreign key bola lagbe na. jemon table users and foreign key user_id
    }
     public function user(){
    	return $this->belongsTo(User::class);//ekhane table users and foreign key user_id
      }
}
