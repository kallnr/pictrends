<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function home(){
    //     return view('page.home');
    // }
    public function explore(){
        return view('page.explore');
    }
    
    public function detailfoto(){
        return view('page.detail_foto');
    }
    public function profile(){
        return view('page.profile');
    }
    public function album(){
        return view('page.album');
    }
    public function favorite(){
        return view('page.favorite');
    }
}
