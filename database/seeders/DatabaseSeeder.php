<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Kamal',
        //     'email' => 'kallnr@gmail.com',
        //     'password' => Hash::make('12345678')
        // ]);
        // User::create([
        //     'name' => 'Annaila',
        //     'email' => 'annaila@gmail.com',
        //     'password' => Hash::make('12345678')
        // ]);

        Kategori::create([
            'tag' => 'food',
            'judul_kategori' => 'Food',
            'foto_kategori' => 'food.jpeg'
        ]);
        Kategori::create([
            'tag' => 'nature',
            'judul_kategori' => 'Nature',
            'foto_kategori' => 'nature.png'
        ]);
        Kategori::create([
            'tag' => 'interior',
            'judul_kategori' => 'Interior',
            'foto_kategori' => 'desaininterior.jfif'
        ]);
        Kategori::create([
            'tag' => 'aesthetic',
            'judul_kategori' => 'Aesthetic',
            'foto_kategori' => 'aesthetic.jpeg'
        ]);
        Kategori::create([
            'tag' => 'wallpaper',
            'judul_kategori' => 'Wallpaper',
            'foto_kategori' => 'Wallpaper.jpg'
        ]);
        Kategori::create([
            'tag' => 'animal',
            'judul_kategori' => 'animal',
            'foto_kategori' => 'hewanpeliharaan.jfif'
        ]);
        Kategori::create([
            'tag' => 'anime',
            'judul_kategori' => 'Anime',
            'foto_kategori' => 'fanartanime.jfif'
        ]);
        Kategori::create([
            'tag' => 'cars',
            'judul_kategori' => 'Cars',
            'foto_kategori' => 'mobil.jpeg'
        ]);
        Kategori::create([
            'tag' => 'fashion',
            'judul_kategori' => 'Fashion',
            'foto_kategori' => 'fashion.jpeg'
        ]);
        Kategori::create([
            'tag' => 'dream',
            'judul_kategori' => 'SetUp',
            'foto_kategori' => 'setup.jpeg'
        ]);
    }
}
