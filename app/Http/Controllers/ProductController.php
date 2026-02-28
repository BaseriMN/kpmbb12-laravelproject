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
            'nama_product'=>'required',
            'harga'=>'required',
            'deskripsi_product'=>'required'
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
}
