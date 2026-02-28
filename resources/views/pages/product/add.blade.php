@extends('layouts.master')

@section('content')
  <h1>Tambah Data Product</h1>
  <hr>
  <div class="card">
    <div class="card-body">
      <form action="/product" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Nama Product</label>
          <input type="text" name="nama_product" class="form-control" value="{{old('nama_product')}}">
          @error('nama_product')
            <div id="nama_product" class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Harga</label>
          <input type="text" name="harga" class="form-control" value="{{old('harga')}}">
          @error('harga')
            <div id="harga" class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <input type="text" name="deskripsi_product" class="form-control" value="{{old('deskripsi_product')}}">
          @error('deskripsi_product')
            <div id="deskripsi_product" class="form-text text-danger">{{$message}}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
    </div>
  </div>


@endsection