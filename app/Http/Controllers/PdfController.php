<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;


use Illuminate\Http\Request;

class PdfController extends Controller
{
     public function generatePDF(){
        $data = [
            'title' => 'Laporan Penjualan',
            'date' => date('d-m-y'),
            'sales' => [
                [ 'product' => 'Product A', 'quantity' => 10, 'price'=> 100000],
                [ 'product' => 'Product B', 'quantity' => 4, 'price'=> 300000],
            ],
        ];

        $pdf = Pdf::loadView('sales', $data);

        return $pdf->download('laporan-penjualan.pdf');
    }
    public function streamPDF()
{
    $data = [
        'title' => 'Laporan Penjualan',
        'date' => date('d-m-Y'),
        'sales' => [
            ['product' => 'Abaya Turkey', 'quantity' => 10, 'price' => 200000],
            ['product' => 'Phasmina ', 'quantity' => 5, 'price' => 100000],
        ],
    ];

    $pdf = Pdf::loadView('sales', $data);


    return $pdf->stream('laporan-penjualan.pdf');
}

}
