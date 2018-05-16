<?php

namespace App\Http\Controllers;

use App\Post;
use App\Provinsi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    function dashboard()
    {
        return view('admin.dashboard');
    }

    function artikel()
    {
        return view('admin.listArtikel');
    }

    function destinasi()
    {
        return view('admin.listDestinasi');
    }

    function rekomendasi()
    {
        return view('admin.listRekomendasi');
    }

    function daftarUser()
    {
        return view('admin.listUser');
    }

    function addDestinasi()
    {
        $provs = Provinsi::all();
        return view('admin.addDestinasi', compact('provs'));
    }

    function createDestinasi(Request $request)
    {
        $post = new Post;
        $post->judul = $request->judul;
        $post->deskripsi = $request->deskripsi;
        $post->harga = $request->harga;
        $post->fasilitas = $request->fasilitas;
        $post->provinsi = $request->provinsi;
        $post->alamat = $request->alamat;
        $post->telp = $request->telp;
        $post->transportasi = $request->transportasi;
        $post->save();
    }

}
