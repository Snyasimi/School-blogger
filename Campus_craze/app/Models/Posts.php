<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
	use HasFactory;//,SoftDeletes;

	protected $fillable = ['author_id','title','content','image'];

	
	public function author(){

		return $this->belongsTo(User::class,'author_id');
	}

	public function liker(){

		return $this->belongsToMany(User::class,'PostLikes');
	}

	

	public function comment(){

		return $this->hasMany(Comments::class,'post_id')->orderBy('created_at','desc');
	}


	public function date(){
	
		return \Carbon\Carbon::parse($this->created_at)->format('F j, Y');
	}

	public function bookmarks(){
		return $this->hasMany(Bookmarks::class,'post_id');
	}
}
