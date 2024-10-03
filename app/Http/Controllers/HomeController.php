<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


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

    public function store(){
        $Product = new product();
        $Product->nama = "Laptop";
        $Product->harga = "10000000";
        $Product->stok = "10";
        $Product->deskripsi = "laptop murah";
        $Product->save();

        return ("data sukses dikirim");
    }

    public function store2(){
        $Product = new product();
        $Product->nama = "Handphone";
        $Product->harga = "40000";
        $Product->stok = "5";
        $Product->deskripsi = "Hp Samsung";
        $Product->save();

        return ("data sukses dikirim");
    }

    public function store3(){
        $Product = new product();
        $Product->nama = "Televisi";
        $Product->harga = "2000000";
        $Product->stok = "7";
        $Product->deskripsi = "TV Lcd";
        $Product->save();

        return ("data sukses dikirim");
    }
    public function store4(){
        $Product = new product();
        $Product->nama = "Kulkas";
        $Product->harga = "7000000";
        $Product->stok = "3";
        $Product->deskripsi = "kulkas sharf";
        $Product->save();

        return ("data sukses dikirim");
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
}
