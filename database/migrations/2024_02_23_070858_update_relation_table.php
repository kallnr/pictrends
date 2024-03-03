<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('fotos', function(Blueprint $table){
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onUpdateCascade()->onDeleteCascade();
            $table->foreign('album_id')->references('id')->on('albums')->onUpdateCascade()->onDeleteCascade();

          });
        Schema::table('likes', function(Blueprint $table){
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
            $table->foreign('foto_id')->references('id')->on('fotos')->onUpdateCascade()->onDeleteCascade();
          });
        Schema::table('komentars', function(Blueprint $table){
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
            $table->foreign('foto_id')->references('id')->on('fotos')->onUpdateCascade()->onDeleteCascade();
          });
        // Schema::table('followers', function(Blueprint $table){
        //     $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
        //     $table->foreign('following_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
        //   });
        Schema::table('albums', function(Blueprint $table){
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
          });
        Schema::table('favorites', function(Blueprint $table){
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
