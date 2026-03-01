<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index(){
        $data_kedai = [
            'nama_kedai'=>'Kedai Basri',
            'alamat'=>'Baling',
            'jenis'=>'Mini Mesra'
        ];

        $product = product::get();

        return view('pages.product.show', [
            'data_kedai'=>$data_kedai,
            'data_product'=>$product,
        ]);
    }

    // untuk memaparkan halaman form data
    public function create(){        
        return view('pages.product.add');
    }

    // untuk menyimpan data yang dihantar dari form
    public function store(Request $request){
        $request->validate([
            'nama_product'=>'required|min:5',
            'harga'=>'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'deskripsi_product'=>'required|min:5'
        ],[
            'nama_product.required'=>'Nama product wajib diisi',
            'nama_product.min'=>'Nama product harus memiliki minimal 5 karakter',
            'harga.required'=>'Harga wajib diisi',
            'harga.numeric'=>'Harga harus berupa angka',
            'harga.regex'=>'Harga harus berupa angka dengan maksimal 2 desimal',
            'deskripsi_product.required'=>'Deskripsi product wajib diisi',
            'deskripsi_product.min'=>'Deskripsi product harus memiliki minimal 5 karakter'
        ]);

        // simpan data ke database
        product::create([
            'nama_product'=>$request->nama_product,
            'harga'=>$request->harga,
            'deskripsi_product'=>$request->deskripsi_product,
            'id_kategori'=>'1'
        ]); 
        
        return redirect('/product')->with('success', 'Product berjaya ditambah!');
    }

    // untuk memaparkan detail data berdasarkan id
    public function show($id){
        // cari data berdasarkan id
        $product = product::findOrfail($id);

        // paparkan data ke view
        return view('pages.product.detail', [
            'data_product'=>$product
        ]);
    }
}