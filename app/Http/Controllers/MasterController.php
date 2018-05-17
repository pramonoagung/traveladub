<?php

namespace App\Http\Controllers;

use App\Post;
use App\Provinsi;
use App\User;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    function cari(Request $request)
    {
        $provs = Provinsi::all();
        $datas = Post::where('judul', 'like', '%' . $request->nama . '%')->get();
        return view('search', compact('datas', 'provs'));
    }

    function filter(Request $request)
    {
        $provs = Provinsi::all();
        $datas = Post::where('judul', 'like', '%' . $request->nama . '%')->where('provinsi', $request->provinsi)->get();
        return view('search', compact('datas', 'provs'));
    }

    function editProfile($id)
    {
        $user = User::findOrFail($id);
        return view('editprofile', compact('user'));
    }

    function updateProfile($id, Request $request)
    {
        $user = User::findOrFail($id);
        if ($request->nama != null && $request->email != null) {
            $user->name = $request->nama;
            $user->email = $request->email;
            $user->save();
        } elseif ($request->nama != null) {
            $user->name = $request->nama;
            $user->save();
        } elseif ($request->email != null) {
            $user->email = $request->email;
            $user->save();
        }

        return redirect()->back()->with('status', 'Berhasil mengupdate profile');
    }
}
