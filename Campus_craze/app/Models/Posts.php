<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	use HasFactory;

	protected $fillable = ['author_id','title','content','image'];

	
	public function author(){

		return $this->belongsTo(User::class,'author_id');
	}

	public function comment(){

		return $this->hasMany(Comments::class,'post_id')->orderBy('created_at','desc');
	}


	public function date(){
	
		return \Carbon\Carbon::parse($this->created_at)->format('F j, Y');
	}
}
