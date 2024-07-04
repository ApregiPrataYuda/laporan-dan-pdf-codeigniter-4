<?php

namespace App\Controllers;
use App\Models\ReportModel;

class ReportMonth extends BaseController
{
    public function index(): string
    {
        $data  = [
            'title' => 'Report by Month'
      ];
      return view('Report-Month/Data',$data);
    }

    public function Laporan_perbulan() {
        $data  = [
            'title' => 'Report by Month'
      ];
      return view('Report-Month/Create-laporan',$data);
    }

    public function generateReport()
    {
        // Ambil input dari form
        $startDate = $this->request->getPost('tgl_awal');
        $endDate = $this->request->getPost('tgl_akhir');

        // Validasi kehadiran input
    if (empty($startDate) || empty($endDate)) {
        // Jika salah satu atau kedua input kosong, redirect atau kirim pesan kesalahan
        return redirect()->back()->withInput()->with('success', 'Silakan pilih tanggal mulai dan tanggal akhir.');
    }

       

        // Panggil model untuk mendapatkan data transaksi berdasarkan periode
        $ReportModel = new ReportModel();
        $transactions = $ReportModel->getTransactionsByPeriod($startDate, $endDate);
         dd($startDate);

        // Kirim data transaksi ke view laporan
  
        $data = [
              'title' => 'Report by Month',
            'transactions' => $transactions,
            'startDate' => $startDate,
            'endDate' => $endDate
        ];

       return view('Report-by-Month/Data',$data);
    }
}
