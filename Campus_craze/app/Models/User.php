<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'username',
        'campus',
        'phone_number',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function posts(){

	    return $this->hasMany(Posts::class,'author_id');
    }

    public function comments(){

	    return $this->hasMany(Comments::class,'user_id');

    }

    public function likedPosts(){
		return $this->hasMany(Post::class,'PostLikes');
	}

	public function reportedPosts(){
		return $this->hasMany(Post::class,'PostReports');
	}

 

    public function bookmarks()
    {

	    return $this->hasMany(Bookmarks::class,'user_id');
    }
}
