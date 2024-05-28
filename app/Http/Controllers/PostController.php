<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use App\Models\Album;
use App\Models\Kategori;
use App\Models\Komentar;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $post = Foto::orderBy('created_at', 'desc');
        //search
        if (request('search')) {
            $post->where('judul_foto', 'like', '%' . request('search') . '%')
                ->orWhere('deskripsi', 'like', '%' . request('search') . '%');
        }


        $data = [
            'Tilte' => 'Home',
            // 'datapic' => Foto::orderBy('created_at', 'desc')->get()
            'datapic' => $post->get(),
            'kategori' => Kategori::all(),
            // 'datafotokategori' => Foto::with('kategori')->where('kategori_id',$id)->latest()->get()
        ];

        return view('/post/index', compact('post'), $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'Title' => 'Post',
            'dataalbum' => Album::where('users_id', auth()->user()->id)->get(),
            'id_user' => auth()->user()->id,
            'datatag' => Kategori::all()
        ];
        return view('post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //



        $filename = pathinfo($request->fileFoto, PATHINFO_FILENAME);
        $extensi = $request->fileFoto->getClientOriginalExtension();
        $namafoto = 'gallery' . time() . '.' . $extensi;
        $request->fileFoto->move('gallery', $namafoto);

        $datasimpan = $request->validate([
            'judul_foto' => 'required',
            'deskripsi' => 'required',
        ]);

        $datasimpan['users_id'] = auth()->user()->id;
        $datasimpan['url'] = $namafoto;
        $datasimpan['kategori_id'] = $request->kategori_id;
        $datasimpan['album_id'] = $request->album;
        // $datasimpan = [
        //     'url' => $namafoto,
        //     'users_id' => auth()->user()->id,
        //     'judul_foto' => $request->judul_foto,
        //     'kategori_id' => $request->kategori_id,
        //     'deskripsi' => $request->deskripsi
        // ];
        Foto::create($datasimpan);
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        $data = [
            'detailfoto' => Foto::with(['user', 'kategori'])->where('id', $id)->first(),
            'datapic' => Foto::all(),
            'dataalbum' => Album::where('users_id', auth()->user()->id)->get(),
            'datatag' => Kategori::all(),
            'addalbum' => Foto::with('album')->where('id',$id)->first(),
            'post' => Foto::find($id)
        ];

        return view('/post/show', compact('user'), $data,);
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

        Foto::destroy($id);
        return back();
    }
}
