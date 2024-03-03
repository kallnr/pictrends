<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Foto;
use App\Models\Like;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'jenis_kelamin',
        'alamat',
        'profile',

    ];


    public function foto() {
        return $this->hasMany(Foto::class,'users_id','id');
    }
    // public function like() {
    //     return $this->hasMany(Like::class,'users_id','id');
    // }
    public function komentar() {
        return $this->hasMany(Komentar::class,'users_id','id');
    }
    // public function likes(){
    //     return $this->hasMany(Like::class, 'likes')->withTimestamps();
    // }

    public function followings() {
        return $this->belongsToMany(User::class, 'follows','follower_id','users_id')->withTimestamps();
    }
    public function followers() {
        return $this->belongsToMany(User::class, 'follows', 'users_id', 'follower_id')->withTimestamps();
    }
    public function follow(User $user){
        return $this->followings()->where('users_id',$user->id)->exists();
    }

    public function album() {
        return $this->hasMany(Album::class,'users_id','id');
    }
    public function favorite() {
        return $this->hasMany(Favorite::class,'users_id','id');
    }
    public function likes(){
        return $this->belongsToMany(Foto::class, 'post_like')->withTimestamps();
    }


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

    public function hasLiked(Foto $post){
        return $this->likes()->where('foto_id', $post->id)->exists();
    }
    public function hasSaved(Foto $post){
        return $this->favorite()->where('foto_id', $post->id)->exists();
    }

}
