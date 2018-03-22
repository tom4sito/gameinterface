<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;


class UploadController extends Controller
{
	public function index(){
		return view('upload.upload');
	}

	public function store(Request $request){
		if($request->hasFile('foto')){
			$request->file('foto');

			$foto_id = $request->input('foto_id');
			$foto_id .= ".jpg";

			$request->foto->storeAs('public/upload', $foto_id);

			$foto_path = '/gameinterface/public/storage/upload/' . $foto_id;

			$foto = Product::find($request->input('foto_id'));

			$foto->foto_path = $foto_path;
			$foto->save();
			return "foto y ruta fueron grabados";
			
		}
		else{
			return "no file selected";
		}

	}

	public function show($id){

		$foto = Product::find($id);
		echo $foto_path = $foto->foto_path;
		return "<img src='".$foto_path."' with=200 height=200>";
	}
}
