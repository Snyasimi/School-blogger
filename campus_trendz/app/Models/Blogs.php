<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    public function creator(){

        return $this->hasOne(Authors::class,'user_id');

    }

    public function comments(){

        return $this->hasMany(Comments::class,'blog_id');

    }
}
