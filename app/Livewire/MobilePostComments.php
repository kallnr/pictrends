<?php

namespace App\Livewire;

use App\Models\Foto;
use Livewire\Component;
use App\Models\Komentar;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Computed;

class MobilePostComments extends Component
{
    public $post;


    public function mount($id){
        $this->post = Foto::find($id);
    }
    #[Rule('required|max:200')]
    public string $isi_komentar;

    public function postComment(){
        $this->validateOnly('isi_komentar');

        $this->post->komentar()->create([
            'isi_komentar' => $this->isi_komentar,
            'foto_id' => $this->post->id,
            'users_id' => auth()->user()->id
        ]);

        $this->reset('isi_komentar');
    }

    #[Computed()]
    public function comments (){
        $comments = Komentar::with('user')->where('foto_id', $this->post->id)->get();
        return $comments;
    }
    public function render()
    {

        return view('livewire.mobile-post-comments');
    }
}
