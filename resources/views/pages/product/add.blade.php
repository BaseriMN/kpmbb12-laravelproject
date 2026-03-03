@extends('layouts.master')

@section('content')
  <h2>Tambah Data Product</h2>
  <hr>
  <div class="card">
    <div class="card-body">
      <form action="/product" method="POST">
        @csrf
        <div class="mb-3 col-md-6">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nama Product</span>
            <input type="text" class="form-control" name="nama_product" value="{{old('nama_product')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          @error('nama_product')
            <div id="nama_product" class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-3 col-md-6">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Harga RM</span>
            <input type="text" class="form-control" name="harga" value="{{old('harga')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          @error('harga')
            <div id="harga" class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-3 col-md-6">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Product Description</span>
            <input type="text" class="form-control" name="deskripsi_product" value="{{old('deskripsi_product')}}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          @error('deskripsi_product')
            <div id="deskripsi_product" class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        <button type="button" class="btn btn-secondary" onclick="window.location.href='/product'">Kembali</button>
      </form>
    </div>
  </div>


@endsection