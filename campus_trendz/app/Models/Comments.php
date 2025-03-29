<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;


    public function blog(){

        return $this->belongsTo(Blogs::class,'blog_id');
    }

    public function commenter(){

        return $this->belongsTo(User::class,'user_id');

    }
}
