<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Abdillah Galang Prasojo',
            'kelas' => 'PPL'
        ];

        return view('p3.profil', $data);
    }
}