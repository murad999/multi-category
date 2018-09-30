<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   public function childs() {
        return $this->hasMany('App\Category','p_id','id') ;
    }



}

// $obj =new Category;

// $fun =$obj->childs();

// dd($fun);
