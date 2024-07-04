<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\Pdfgenerator;
class Buatpdf extends BaseController
{
    public function index()
    {
        $data  = [
            'title' => 'Buat pdf',
           
      ];
      return view('Report-pdf/Data',$data);
    }

    public function views() {
        $Pdfgenerator = new Pdfgenerator();
        // title dari pdf
       $data['title_pdf'] = 'Laporan Penjualan Toko Kita';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_penjualan_toko_kita';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";

        $html = view('Report-pdf/laporan_pdf',  $data);

        // run dompdf
        $Pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
