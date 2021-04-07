<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
    	$customer = Customer::all();
    	return view('user/customer',['customers' => $customer]);
	}

    public function create(){
    	return view('user/tambahcustomer');
    }

    public function store(Request $request){
    	$data = $request->all();
    	$gambar = $request->gambar->store('produk');
    	$data['gambar'] = $gambar;
    	$data['id'] = rand(1,9999);

    	$customer = new Customer();
    	$customer->fill($data)->save();
    	return redirect('/customer');
    }

    public function edit($id){
    	$customer = Customer::find($id);
    	return view('user.ubahcustomer',['customers' => $customer]);
    }

    public function update(Request $request, $id){
    	$customer = Customer::find($id);
    	$customer->update($request->all());
    	return redirect('/customer');
    }

    public function delete($id){
    	$customer = Customer::find($id);
    	$customer->delete($customer);
    	return back();
    }
}
