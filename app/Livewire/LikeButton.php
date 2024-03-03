<?php

namespace App\Livewire;

use App\Models\Foto;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Reactive;

class LikeButton extends Component
{


    #[Reactive]
    public Foto $post;



    // public function mount(Foto $post)
    // {
    //     $this->post = $post;
    // }


    public function toggleLike()
    {

        $user = auth()->user();


        if ($user->hasLiked($this->post)) {
            $user->likes()->detach($this->post);
            return;
        }

        $user->likes()->attach($this->post);
    }

    public function render()
    {

        return view('livewire.like-button');
    }
}
