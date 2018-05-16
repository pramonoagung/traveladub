<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    function cari(Request $request)
    {
        $datas = Post::where('judul', 'like', '%' . $request->nama . '%')->get();
        return view('search', compact('datas'));
    }
}
