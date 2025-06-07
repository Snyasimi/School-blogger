<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\User;

class Comments extends Model
{
	use HasFactory;


	protected $fillable = ['post_id','content','parent_comment'];


	public function author(){
	
		return $this->belongsTo(User::class,'user_id');
	}

	public function post(){

		return $this->belongsTo(Post::class,'post_id');
	}
}
