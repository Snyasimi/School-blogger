<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostLikes extends Model
{
    use HasFactory;



    protected $fillable = ['post_id','user_id'];


    

    public function user()
    {
           
        return $this->belongsToMany(Like::class, 'role_user_table', 'user_id', 'role_id');

    }


}
