<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view("kelas.all",
        [   
            "title" => "Kelas",
            "kelass" => Kelas::all(),
        ]);
    }

    public function show($id)
    {
        return view("kelas.detail",[
            "title" => "Detail Kelas",
            "kelas" => Kelas::find($id) //* Route model binding,
        ]);
    }
}
