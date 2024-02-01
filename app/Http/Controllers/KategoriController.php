<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use query builder
use Illuminate\Support\Facades\DB;
//use query eloquent
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        // query builder
        // $kategoris = DB::table('kategoris')->get();

        // query eloquent
        $kategoris = kategori::all(); 
        return view('kategori', [
            'data' => $kategoris,
        ]);
    }
// add
    public function add()
    { 
        return view('form_kategori');
    }
// edit
    public function edit($id)
    {
        $kategori = kategori::find($id); 
        return view('form_kategori', [
            'data' => $kategori,
        ]);
    }
// save    
    public function save(Request $req)
    {
        // dd($req)
        $old_kode = @$req->old_kode;
        if ($old_kode) {
            //Mode Edit

            //Eloquent
            Kategori::where('kode_kategori', $old_kode)->update([
                'kode_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket,
            ]);

        } else {
            // mode add

            // query builder
            // DB::table('kategoris')->insert([
            // 'kode_kstegori' => $req->kode,
            // 'nama' => $req->nama,
            // 'ket' => $req->ket,
            // ]);

            // eloquent 1
            Kategori::create([
                'kode_kategori' => $req->kode,
                'nama' => $req->nama,
                'ket' => $req->ket,
            ]);
            //eloquen 2
            // $kategori = new kategori;
            // $kategori->kode_kategori = $req->kode;
            // $kategori->nama = $req->nama;
            // $kategori->ket = $req->ket;
            // $kategori->save();
        }
        return redirect('/kategori');

    }
//hapuss    
    public function delete($id)
    {
        // dd($id);
        // query builder
        // DB::table('kategoris')->where('kode_kategori', $id)->delete();

        //eloquent 1
        Kategori::find($id)->delete();

        //eloquent 2
        // kategori::where('kode_kategori', $id)->delete();
        return redirect('/kategori');
    }

}
