<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   protected $table="news";
   public function category()
   {
	   return $this->belongsToMany(Category::class,'newscategory');
   }
}
