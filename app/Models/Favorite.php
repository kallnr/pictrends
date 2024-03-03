<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable =
    ['users_id',
    'following_id'
    ];

    public function user() {
        return $this->belongsTo(User::class,'users_id','id');
    }
    public function foto() {
        return $this->belongsTo(Foto::class,'foto_id','id');
    }
}
