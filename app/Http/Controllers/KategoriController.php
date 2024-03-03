<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = [
            // 'showkategori' => Foto::with('kategori')->where('id', $id)->get(),
            'kategori' => Kategori::all(),
        ];
        return view('post.index', $data);
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
        // $tambahtag = [
        //     'users_id' => auth()->User()->id,
        //     'tag' => $request->tag,

        // ];
        // Kategori::create($tambahtag);
        return redirect('/post/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    // Mengambil data foto untuk kategori tertentu
    $datafotokategori = Foto::with('kategori')->where('kategori_id',$id)->latest()->get();
     $kategori = Kategori::find($id);
    // Mengambil data kategori
    // $datakategori = $kategori; // Jika Anda perlu mengirimkan data kategori ke tampilan

     return view('explore.index', compact( 'datafotokategori','kategori'));
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
