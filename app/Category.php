<?php

namespace App;
use App\News;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table='category';
	public function news()
	{
		return $this->belongsToMany(News::class,'newscategory');
	}
}
