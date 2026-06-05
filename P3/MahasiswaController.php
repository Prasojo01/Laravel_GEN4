<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Aisyah Putri Zahra',
            'jurusan' => 'Sistem Informasi'
        ];

        return view('p3.mahasiswa', $data);
    }
}