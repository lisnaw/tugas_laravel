<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
