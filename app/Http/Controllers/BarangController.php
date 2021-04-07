<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class BarangController extends Controller
{
    public function tampil(){
    	$product = Product::all();
    	return view('user/toko',['produks' => $product]);
    }
}
