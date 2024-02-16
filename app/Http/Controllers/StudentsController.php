<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view("student.all",
        [   
            "title" => "Student",
            'students' => Student::all(),
        ]);
    }

    public function show($id)
    {
        return view("student.detail",[
            "title" => "Detail Student",
            "student" => Student::find($id) //* Route model binding,
        ]);
    }
}
