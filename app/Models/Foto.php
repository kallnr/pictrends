<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use App\Models\Album;
use App\Models\Favorite;
use App\Models\Kategori;
use App\Models\Komentar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Foto extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_foto',
        'deskripsi',
        'url',
        'users_id',
        'kategori_id',
        'album_id',
        'judul_kategori'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id','id');
    }
    public function album(){
        return $this->belongsTo(Album::class, 'album_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'users_id','id');
    }
    // public function like(){
    //     return $this->hasMany(Like::class, 'foto_id','id');
    // }
    public function likes(){
        return $this->belongsToMany(User::class, 'post_like')->withTimestamps();
    }
    // public function likes(){
    //     return $this->hasMany(Like::class, 'likes')->withTimestamps();
    // }

    public function komentar(){
        return $this->hasMany(Komentar::class, 'foto_id','id');
    }

    public function favorite(){
        return $this->hasMany(Favorite::class, 'foto_id','id');
    }
}
