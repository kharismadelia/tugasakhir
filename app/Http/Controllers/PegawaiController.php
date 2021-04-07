<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pegawai;

class PegawaiController extends Controller
{
    public function index(){
    	$employee = Pegawai::all();
    	return view('admin/pegawai',['pegawai' => $employee]);
	}

    public function create(){
    	return view('admin/tambahpegawai');
    }

    public function store(Request $request){
		
		//insert user
		$user = new \App\User;
		$user->role = 'pegawai';
		$user->name = $request->nama;
		$user->email = $request->email;
		$user->password = bcrypt ('123');
		$user->remember_token = str_random(60);
		$user->save();
		//insert pegawai
		$request->request->add(['user_id' => $user->id]);
    	$data = $request->all();
    	$gambar = $request->gambar->store('pegawai');
    	$data['gambar'] = $gambar;
		$data['id_pegawai'] = rand(1,9999);
		$employee = new Pegawai();
		$employee->fill($data)->save();

    	return redirect('/pegawai');
	}
	
	public function edit($id_pegawai){
    	$employee = Pegawai::find($id_pegawai);
    	return view('admin.ubahpegawai',['pegawai' => $employee]);
    }

    public function update(Request $request, $id_pegawai){
    	$employee = Pegawai::find($id_pegawai);
    	$employee->update($request->all());
    	return redirect('/pegawai');
    }

    public function delete($id_pegawai){
    	$employee = Pegawai::find($id_pegawai);
    	$employee->delete($employee);
    	return back();
    }
}
