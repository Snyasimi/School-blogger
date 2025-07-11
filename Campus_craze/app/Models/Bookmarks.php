<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmarks extends Model
{
    use HasFactory;

    protected $fillable = ['post_id'];


    public function user()
    {

	    return $this->belongsTo(User::class,'user_id');
    }

    public function post(){

        return $this->belongsTo(Posts::class,'post_id');
    }
}
