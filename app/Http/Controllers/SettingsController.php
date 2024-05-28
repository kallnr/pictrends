<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index(Request $request){
        $data = [
            'dataprofile' => User::where('id', auth()->user()->id)->first()
        ];
        return view('settings.index',$data);
    }
    public function updatepassword(Request $request){
        $user = User::find(auth()->user()->id);

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('failure', 'Password change failed. Current password is incorrect.');
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->back()->with('success', 'Password has been changed successfully.');
    }
}
