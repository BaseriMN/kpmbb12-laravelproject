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

    public function addProduct(){
        return view('pages.addproduct');
    }
}
