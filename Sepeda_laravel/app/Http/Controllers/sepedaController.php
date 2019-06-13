<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sepeda;

class sepedaController extends Controller
{
    public function index(){
		
// 		// file Sepeda terdapat pada folder resource
		$var = 'Fifin';
		$data = sepeda::all();
// //		dd($data
		return view('Sepeda.index', compact('var', 'data'));
	}

	public function create(){
		return view('Sepeda.tambah');
	}

	public function store(Request $sepeda){
		sepeda::create($sepeda->all());
		return redirect('Sepeda');
	}

	public function edit($id){
				//select * from Sepeda where id=$id
		$spd = sepeda::find($id);
		return view('Sepeda.ubah', compact('spd'));
	}

	public function update(Request $sepeda, $id){
		$spd = $sepeda->all();
		sepeda::find($id)->update($spd);
		return redirect('Sepeda');
	}

	public function destroy($id){
	//hapus dari tabel Sepeda dimana id
		Sepeda::find($id)->delete();
		return redirect('Sepeda');
	}
}
