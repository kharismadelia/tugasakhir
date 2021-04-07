<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProdukController extends Controller
{
    //
    public function index(){
    	$product = Product::all();
    	return view('admin/toko',['produks' => $product]);
	}

    public function create(){
    	return view('admin/tambahproduk');
    }

    public function store(Request $request){
    	$data = $request->all();
    	$gambar = $request->gambar->store('produk');
    	$data['gambar'] = $gambar;
    	$data['id'] = rand(1,9999);

    	$produk = new Product();
    	$produk->fill($data)->save();
    	return redirect('/admin_toko');
    }

    public function edit($id){
    	$product = Product::find($id);
    	return view('admin.ubahproduk',['produks' => $product]);
    }

    public function update(Request $request, $id){
    	$product = Product::find($id);
    	$product->update($request->all());
    	return redirect('/admin_toko');
    }

    public function delete($id){
    	$product = Product::find($id);
    	$product->delete($product);
    	return back();
    }
}
