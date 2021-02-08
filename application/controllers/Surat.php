<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index()
    {
        $pdf = new FPDF('P', 'cm', 'A4');
        // Membuat margin
        // $pdf->setmargins(4,4,3);
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(23, 1, 'UNIVERSITAS KRISNADWIPAYANA', 0, 1, 'C');
        $pdf->Cell(23, 0.5, 'FAKULTAS TEKNIK', 0, 1, 'C');
        $pdf->SetFont('Arial', 12);
        $pdf->Cell(23, 0.5, 'FAKULTAS TEKNIK', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        // $pdf->Cell(10,7,'',0,1);
        // $pdf->SetFont('Arial','B',10);
        // $pdf->Cell(20,6,'NIM',1,0);
        // $pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
        // $pdf->Cell(27,6,'NO HP',1,0);
        // $pdf->Cell(25,6,'TANGGAL LHR',1,1);
        // $pdf->SetFont('Arial','',10);
        // $mahasiswa = $this->db->get('mahasiswa')->result();
        // foreach ($mahasiswa as $row){
        //     $pdf->Cell(20,6,$row->nim,1,0);
        //     $pdf->Cell(85,6,$row->nama_lengkap,1,0);
        //     $pdf->Cell(27,6,$row->no_hp,1,0);
        //     $pdf->Cell(25,6,$row->tanggal_lahir,1,1); 
        // }
        $pdf->Output();
    }
}
