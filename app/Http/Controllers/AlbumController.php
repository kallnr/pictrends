<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'dataalbum' => Album::all()
        ];
        return view('user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $user = auth()->user()->id;
        // $post = Foto::find($id);
        // $data = [
        //     'judul_album' => 'judul_album',
        //     'foto_id' => $post,
        //     'users_id' => $user
        // ];
        // Album::create($data);
        $filename = pathinfo($request->foto_album, PATHINFO_FILENAME);
        $extensi = $request->foto_album->getClientOriginalExtension();
        $namafoto = 'fotoalbums' . time() . '.' . $extensi;
        $request->foto_album->move('fotoalbums', $namafoto);
        //  $post = Foto::where('id', $request->get('foto_id'))->first();

        //$album = Album::where('users_id', Auth::user()->id)->first();
        $datasimpan = [
            'judul_album' => $request->judul_album,

        ];
        $datasimpan['users_id'] = auth()->user()->id;
        $datasimpan['foto_album'] = $namafoto;

        //  if ($album){
        //     Album::create($album);
        Album::create($datasimpan);
        return back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $dataalbum = Foto::with('album')->where('album_id', $id)->latest()->get();

        return view('album.show', compact('dataalbum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
