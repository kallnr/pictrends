<?php

namespace App\Models;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'users_id',
        'fotos_id',
    ];

    public function user() {
        return $this->belongsTo(User::class,'users_id','id');
    }
    public function foto() {
        return $this->belongsTo(Foto::class,'foto_id','id');
    }
}
