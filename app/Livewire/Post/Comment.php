<?php

namespace App\Livewire\Post;

use App\Models\Foto;
use Livewire\Component;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;

class Comment extends Component
{

    public $isi_komentar;

    public $fotos_id;


    public function mount($id)
    {
        $this->fotos_id = Foto::find($id);
    }
    public function render()
    {

        return view('livewire.post.comment');
    }
    public function store()
    {
        $this->validate(['isi_komentar' => 'required']);
        Komentar::create([
            'users_id' => Auth::user()->id,
            'fotos_id' => $this->fotos_id->id,
            'isi_komentar' => $this->isi_komentar
        ]);
        return redirect()->route('post.show');
    }
}
