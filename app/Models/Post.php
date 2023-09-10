<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
		/**
		*	sets which variables can be mass-assigned
		*/
//		protected $fillable = ['title', 'excerpt', 'body'];

		/**
		*	everything is fillable except what you provide to this array
		*/
		protected $guarded = ['id'];

		public function getRouteKeyName()
		{
			return 'slug'; // TODO: Change the autogenerated stub
		}

		public function category()
		{
			return $this->belongsTo(Category::class);
		}

}