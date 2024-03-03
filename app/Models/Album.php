<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = 'albums';
    protected $fillable = [
        'judul_album',
        'foto_album',
        'users_id',


    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

}
