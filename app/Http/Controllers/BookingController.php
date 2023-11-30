<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Booking; // Import model Booking

class BookingController extends Controller
{
    public function saveBook(Request $request)
    {
        // Validate the form data
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'alamat' => 'required',
            'tgl_pemesanan' => 'required',
        ]);

        // Capture form data
        $namaLengkap = $request->input('nama_lengkap');
        $email = $request->input('email');
        $noTelp = $request->input('no_telp');
        $alamat = $request->input('alamat');
        $tglPemesanan = $request->input('tgl_pemesanan');

        // Save data to database using Eloquent model
        $booking = new Booking();
        $booking->nama_lengkap = $namaLengkap;
        $booking->email = $email;
        $booking->no_telp = $noTelp;
        $booking->alamat = $alamat;
        $booking->tgl_pemesanan = $tglPemesanan;
        $booking->save();

        // HTML for PDF
        $html = "
            <style>
                body {
                    font-family: Arial, sans-serif;
                }

                h1 {
                    color: #333;
                }

                p {
                    margin-bottom: 10px;
                }

                strong {
                    font-weight: bold;
                }
            </style>
            <h1>Detail Pemesanan</h1>
            <p><strong>Nama Lengkap:</strong> $namaLengkap</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Nomor Telepon:</strong> $noTelp</p>
            <p><strong>Alamat:</strong> $alamat</p>
            <p><strong>Tanggal Pemesanan:</strong> $tglPemesanan</p>
        ";

        // Create Dompdf instance
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        // Load HTML into Dompdf
        $dompdf->loadHtml($html);

        // Set paper size
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Output PDF to file
        $output = $dompdf->output();

        // Save PDF file
        $fileName = 'Detail Pemesanan Tiket.pdf'; // Nama file PDF yang diinginkan
        $filePath = public_path('pdf' . $fileName);
        file_put_contents($filePath, $output);

        // Berikan tautan ke file PDF
        return redirect()->back()->with('success', 'Booking data added successfully')->with('pdfLink', 'pdf/' . $fileName);
    }
}
