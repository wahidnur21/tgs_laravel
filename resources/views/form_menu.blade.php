@extends('template.index')

@section('title', 'Home')

@section('content')

<div class="container">
    <div class="row">
        <div class="row-12">
            <form action="/kategori/save" method="POST">
                @csrf
                @isset($data)
                <input type="hidden" name="old_kode" value="{{ @$data->kode_kategori }}">
                @endisset
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="kode" value={{ @$data->kode_menu }}>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="kode" value={{ @$data->nama }}>
                    </div>

                    <div class="mb-3">
                        <label for="kategori" class="form-label">kategori</label>
                        <input type="text" class="form-control" id="kode" value={{ @$data->kategori }}>
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="kode" value={{ @$data->harga }}>
                    </div>

                    <div class="mb-3">
                        <label for="ket" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="kode" value={{ @$data->ket }}>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
              
        </div>
    </div>
</div>
    
@endsection