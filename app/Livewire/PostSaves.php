<?php

namespace App\Livewire;

use App\Models\Foto;
use Livewire\Component;
use Livewire\Attributes\Reactive;

class PostSaves extends Component
{
    // public Foto $post;
    // #[Reactive]
    // public $post;



    // public function mount($id)
    // {
    //     $this->post = Foto::find($id);
    // }


    public function toggleSave()
    {

        $user = auth()->user()->id;


        if ($user->hasSaved($this->post)) {
            $user->favorite()->detach($this->post);
            return;
        }

        // $user->favorite()->attach($this->post);
    }
    public function render()
    {
        return view('livewire.post-saves');
    }
}
