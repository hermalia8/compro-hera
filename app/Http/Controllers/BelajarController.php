<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        return 'Halo ini dari BelajarController pada method index';
    }

    public function create()
    {
        return view('create');
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function kurang()
    {
        return view('kurang');
    }

    public function bagi()
    {
        return view('bagi');
    }

    public function kali()
    {
        return view('kali');
    }

    public function tambahAction(request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->post('angka2');

        $jumlah = $angka1 + $angka2;
        return view('tambah', ['hasil' => $jumlah]);
    }

    public function kurangAction(request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->post('angka2');

        $jumlah = $angka1 - $angka2;
        return view('kurang', ['hasil' => $jumlah]);
    }

    public function bagiAction(request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->post('angka2');

        $jumlah = $angka1 / $angka2;
        return view('bagi', ['hasil' => $jumlah]);
    }

    public function kaliAction(request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->post('angka2');

        $jumlah = $angka1 * $angka2;
        return view('kali', ['hasil' => $jumlah]);
    }
}
