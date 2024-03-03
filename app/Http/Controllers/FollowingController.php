<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowingController extends Controller
{
    //
    public function follow(User $user){
        $follower = auth()->user();

        $follower->followings()->attach($user);
        return back();
    }

    public function unfollow(User $user){
        $follower = auth()->user();

        $follower->followings()->detach($user);
        return back();
    }

}




















// public function following()
    // {
    // }
    // public function follower()
    // {
    // }

    // public function store(Request $request, User $user)
    // {


    //     if (Auth::user()->hasFollow($user)) {
    //         Auth::user()->unfollow($user);
    //     } else {
    //         // Pastikan pengguna sudah diautentikasi sebelum memanggil follow()
    //         Auth::user()->follow($user);
    //     }


    //     return back();
    // }
