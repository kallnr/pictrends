<?php

namespace App\Models;

use App\Models\Foto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_kategori',
        'tag',
        'foto_kategori',
    ];

    //untuk konek tabel
    protected $table = 'kategoris';

    public function foto()
    {
        return $this->hasMany(Foto::class, 'kategori_id', 'id');
    }
}
