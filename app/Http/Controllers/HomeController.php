<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function index()
    {
        // Data array yang berisi daftar buku
        $books = [
            ['title' => 'Kisah Cinta di Ujung Doa', 'author' => 'Nadhira', 'year' => 2021],
            ['title' => 'Hujan Yang Berkah', 'author' => 'Ririn Fitria', 'year' => 2020],
            ['title' => 'Aku, Dia dan keluarga', 'author' => 'Lailatul Fitri', 'year' => 2019],
            ['title' => 'In the Footsteps of the Prophet', 'author' => 'Tariq Ramadan', 'year' => 2022],
            ['title' => 'Ketika Cinta Menemukan Jalannya', 'author' => 'Lia S', 'year' => 2018],
        ];

        // Mengirim data buku ke view 'home'
        return view('home', ['books' => $books]);
    }


// hari ini


    public function from(Request $request) {
        // Ambil data message dari request
        $dataMessage = $request->message;

        // Simpan data ke session
        $request->session()->put('message', $dataMessage);

        // Redirect ke halaman home
        return redirect('/home');
    }


// tambahan 1 okto

    public function store(Request $request){

        $validator = validator::make($request->all(), [
            'nama' => 'required|string|max:225',
            'stok' => 'required|integer|min:50',
            'harga' => 'required|numeric|min:2',
            'deskripsi' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $Product = new product();
        $Product->nama = $request->nama;
        $Product->harga = $request->harga;
        $Product->stok = $request->stok;
        $Product->deskripsi = $request->deskripsi;
        $Product->save();

        return redirect('/show');
    }



   public function show(){
    $Product = Product::paginate(3);
    return view("tableProduct", compact("Product"));
}


    // 2okotoberr
   public function edit($id){
    $Product = Product::findOrFail($id);
    // @dd($Product);
    return view("editProduct", compact("Product"));
    }



    public function update(Request $request, $id){
        $Product = Product::findOrFail($id);
        $Product->nama = $request->nama;
        $Product->stok = $request->stok;
        $Product->harga = $request->harga;
        $Product->deskripsi = $request->deskripsi;
        $Product->save();

        return redirect('/show');

    }

    public function destroy($id){
        $Product = product::findOrFail(($id));
        $Product->delete();

        return redirect('/show');
    }

    public function input(){
        return view("inputProduct");
    }
}
