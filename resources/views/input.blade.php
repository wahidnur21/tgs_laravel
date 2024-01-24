@extends('template')

@section('judul', 'Home')

@section('content')
<h3>ini halaman home</h3>

    <form action="/save" method="post">
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama">
        </div>

        <div>
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori">
        </div>

        <div>
            <label for="harga">Harga</label>
            <input type="number" name="harga">
        </div>

        <div>
            <label for="ket">Keterangan</label>
            <input type="text" name="ket">
        </div>

        <button type="submit">Simpan</button>

    </form>
@endsection