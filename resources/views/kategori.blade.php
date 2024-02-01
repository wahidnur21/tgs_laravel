@extends('template.index')

@section('title', 'Kategori')

@section('content')

<div class="container my-4">
    <div class="row">
        <div class="row-12">
            <a href="/kategori/add">
               <button type="button" class="btn btn-success">Tambah</button>
            </a>
        </div>
    </div>

<div class="row mt-3">
    <div class="row-12">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Keterangan</th>
               
            </tr>
          </thead>
          <tbody>
             @foreach ($data as $row)
               <tr>
                  <th scope="row">{{ $row->kode_kategori }}</th>
                  <td>{{ $row->nama }}</td>
                  <td>{{ $row->ket }}</td>
                  <td style="max-width: 50px">
                  <div class="btn-group">
                      <a href="/kategori/{{ $row->kode_kategori }}/edit">
                          <button type="button" class="btn btn-primary">Edit</button
                      </a>

                      <a href="/kategori/{{ $row->kode_kategori }}/delete">
                          <button type="button" class="btn btn-danger">Hapus</button
                      </a>
                      </div>
                  </td>
               </tr>
            @endforeach
          </tbody>
       </table> 
       
     </div>
  </div>
</div>
    
@endsection