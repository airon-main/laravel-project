<?php

namespace App\Http\Controllers;

use App\Models\Extracurriculars;
use Illuminate\Http\Request;

class ExtracurricularsController extends Controller
{
    public function index()
    {
        return view("extracurricular",
        [   
            "title" => "Extracurricular",
            'extras' => Extracurriculars::all(),
        ]);
    }
}
