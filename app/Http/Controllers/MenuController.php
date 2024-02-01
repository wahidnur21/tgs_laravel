<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
//use query eloquent
use App\Models\Makanan;

class MenuController extends Controller
{
    // index
    public function index_mnu() {

        $makanans = makanan::all(); 
        return view('menu', [
            'data' => $makanans,
        ]);
    }
    // add
    public function add_mnu()
    { 
        return view('form_menu');
    }
    // edit
    public function edit_mnu($id)
    {
        $makanan = makanan::find($id); 
        return view('form_menu', [
            'data' => $makanan,
        ]);
    }
    // save 
    public function save(Request $req)
    {
        // dd($req)
        $mnu_kode = @$req->mnu_kode;
        if ($mnu_kode) {
            //Mode Edit

            //Eloquent
            makanan::where('kode_makanan', $mnu_kode)->update([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
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
            makanan::create([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket,
            ]);
            //eloquen 2
            // $kategori = new kategori;
            // $kategori->kode_kategori = $req->kode;
            // $kategori->nama = $req->nama;
            // $kategori->ket = $req->ket;
            // $kategori->save();
        }
        return redirect('/menu');

    }
    public function delete($id)
    {
        // dd($id);
        // query builder
        // DB::table('kategoris')->where('kode_kategori', $id)->delete();

        //eloquent 1
        makanan::find($id)->delete();

        //eloquent 2
        // kategori::where('kode_kategori', $id)->delete();
        return redirect('/menu');
    }

}
