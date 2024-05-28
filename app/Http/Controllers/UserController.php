<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use App\Models\Album;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'datapic' => Foto::with('user')->where('users_id', auth()->user()->id)->latest()->get(),
            'dataprofile' => User::where('id', auth()->user()->id)->first(),
            'datafollow' => User::with('follows')->where('users_id','following_users_id'),
            'dataalbum' => Album::with('user')->where('users_id', auth()->user()->id)->latest()->get()
        ];
        return view('/user/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'dataprofile' => User::where('id', auth()->user()->id)->first()
        ];
        return view('/user/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //


        if ($request->hasFile('fileFoto')) {
            $filename = pathinfo($request->file('fileFoto')->getClientOriginalName(), PATHINFO_FILENAME);
            $extensi = $request->file('fileFoto')->getClientOriginalExtension();
            $namafoto = 'profile' . time() . '.' . $extensi;
            $request->file('fileFoto')->move('profile', $namafoto);

            $dataupdate = [
                'profile' => $namafoto,
                'name' => $request->name,
                'tgl_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'bio' => $request->bio,
                'alamat' => $request->alamat,
            ];
        } else {
            $dataupdate = [
                'name' => $request->name,
                'tgl_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'bio' => $request->bio,
                'alamat' => $request->alamat,
            ];
        }

        User::where('id', auth()->user()->id)->update($dataupdate);
        return redirect('/user');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = User::findOrFail($id);
        $data = [
            'datapic' => Foto::with('user')->where('users_id', $id)->latest()->get(),
            'dataprofile' => User::where('id', $id)->first(),
            'dataalbum' => Album::with('user')->where('users_id',$id)->latest()->get()
        ];
        return view('user.show', compact('user'), $data);
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
