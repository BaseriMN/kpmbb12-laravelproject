@extends('layouts.master')

@section('content')
<h2>Detail Product</h2>
<hr>
<div class="card">
    <div class="card-header">
        Detail Product
    </div>

    <div class="card-body">
        <img src="https://placehold.co/600x400" class="img-fluid" alt="Product Image">
        <p><b>Nama Product:</b> {{$data_product->nama_product}}</p>
        <p><b>Harga:</b> {{$data_product->harga}}</p>
        <p><b>Deskripsi Product:</b> {{$data_product->deskripsi_product}}</p>
        <p><b>ID Kategori:</b> Barangan Elektrik</p>
        <p><b>Stok: </b>10</p>
        <button class="btn btn-primary" onclick="window.location.href='/product'">Kembali ke Daftar Product</button>
    </div>
</div>


@endsection