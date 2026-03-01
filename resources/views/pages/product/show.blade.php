@extends('layouts.master')

@section('content')
<h2>Daftar Product</h2>
<hr>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="/product/create" type="button" class="btn btn-primary mb-3">Tambah Product</a>
</div>
  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif
<div class="card">
  <div class="card-header">
    Daftar Product
  </div>
  <div class="alert alert-primary">
    <b>Nama Kedai :</b> {{$data_kedai['nama_kedai']}}
    <br>
    <b>alamat :</b> {{$data_kedai['alamat']}}
    <br>
    <b>Jenis Kedai :</b> {{$data_kedai['jenis']}}
  </div>
  <div class="card-body">
    <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">ID Product</th>
      <th scope="col">Nama Product</th>
      <th scope="col">Harga</th>
      <th scope="col">Deskripsi Product</th>
      <th scope="col">Action</th
    </tr>
  </thead>
  <tbody>
    @foreach($data_product as $item)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$item->nama_product}}</td>
        <td>{{$item->harga}}</td>
        <td>{{$item->deskripsi_product}}</td>
        <td>
          <button type="button" class="btn btn-danger">Delete</button>
          <button type="button" class="btn btn-warning">Edit</button>
          <a href="/product/{{$item->id_product}}" type="button" class="btn btn-info">Detail</a>
        </td>
      </tr>
    @endforeach

  </tbody>
</table>
  </div>
</div>

@endsection