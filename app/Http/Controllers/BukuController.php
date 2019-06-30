<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    function view_buku(){
        $data   = DB::table('buku')->get();
        return view('buku/home', compact('data'));
    }

    function tambah_buku(){
        return view('buku/tambah');
    }

    function tambahkan_buku(){
        DB::table('buku')->insert([
            'judul_buku'    => request()->input('judul_buku'),
            'penerbit'      => request()->input('penerbit'),
            'jumlah_halaman'=> request()->input('jumlah_halaman'),
            'user_have'     => request()->input('user_have'),
        ]);
        return redirect()->route('buku');
    }

    function edit_buku(){
        $id     = request()->query('id');
        $data   = DB::table('buku')->where('id', $id)->first();
        return view('buku/edit', compact('data'));
    }

    function hapus_buku(){
        $id = request()->input('id');
        DB::table('buku')->where('id', $id)->delete();
        return redirect()->route('buku');
    }

    function update_buku(){
        $id = request()->input('id');
        DB::table('buku')->where('id', $id)->update([
            'judul_buku'    => request()->input('judul_buku'),
            'penerbit'      => request()->input('penerbit'),
            'jumlah_halaman'=> request()->input('jumlah_halaman'),
            'user_have'     => request()->input('user_have'),
        ]);
        return redirect()->route('buku');
    }
}
