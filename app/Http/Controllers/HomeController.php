<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Makanan;
use App\Models\Kategori;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function tambah()
    {
        return view('input');
    }

    public function simpan(Request $request)
    {
        $nama = $request->input('nama');
        $kategori = $request->input('kategori');
        $harga = $request->input('harga');
        $ket = $request->input('ket');

        return view('result', [
            'nama' => $nama,
            'kategori' => $kategori,
            'harga' => $harga,
            'keterangan' => $ket,
        ]);
    }

    public function view_makanan()
       {
         //query builder
         // $makanans = DB::table('makanan')->get();

         //eloquent
         $makanans = Makanan::all();
         // dd($makanans);
         return view('makanan', [
            'foods' => $makanans,
        ]);

        }
    

    public function test()
       {
         //query Builder inset 1 data
        // DB ::table('makanans')->insert([
        //     'nama' => 'Joko',
        //     'kategori' => 'single',
        //     'harga' => '20.000',
        //     'ket' => 'Murahan',           
        //  ]);
    //     //query Builder ubtuk insert banyak data
    //     DB::table('makanans')->insert([
    //         [
    //             'nama' => 'Lala',
    //             'kategori' => 'cantik',
    //             'harga' => '1000000',
    //             'ket' => 'Mahal'
    //         ],
    //         [
    //             'nama' => 'Rio',
    //             'kategori' => 'tampan',
    //             'harga' => '400000',
    //             'ket' => 'dijual'
    //         ],
    //         [
    //             'nama' => 'Dimas',
    //             'kategori' => 'sehat',
    //             'harga' => '9000000',
    //             'ket' => 'dijual'
    //         ],
    //     ]);
    //     //query untuk SELECT data 
    //     $result = DB::table('makanans')->where('id', 1)->get();
    //     dd($result);

    //     //query untuk DELETE data
    //     DB::table('makanans')->where('id', 1)->delete();

    // Query untk Update data
    DB::table('makanans')->where('kode_makanan', 1)->update([
        'nama'=> 'onde-onde',
        'kategori'=> 'onde-onde',
        'harga'=> 'onde-onde',
        'ket'=> 'onde-onde',
    ]);
    
        return 'masuk ke test';
    }
}
