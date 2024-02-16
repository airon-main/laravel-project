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

    public function add()
    {
        return view("student.add",[
            "title" => "Add Student",
            "kelas" => Kelas::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nis'       => 'required|max:255',
            'nama'      => 'required|max:255',
            'tgl_lahir' => 'required',
            'kelas_id'     => 'required',
            'alamat'    => 'required',
        ]);

        $result = Student::create($validateData);
        if($result) {
            return redirect('/student/all')->with('success','Data siswa berhasil ditambahkan');
        }
    }

    public function edit(Student $student) {
        return view("student.edit",[
            "title" => "Edit Student",
            "student" => Student::find($student->id), //* Route model binding,
            "kelas" => Kelas::all(),
        ]);
    }

    public function update(Request $request, $id) {
        $validateData = $request->validate([
            'nis'       => 'required|max:255',
            'nama'      => 'required|max:255',
            'tgl_lahir' => 'required',
            'kelas'     => 'required',
            'alamat'    => 'required',
        ]);

        $id = Student::findOrFail($id);
        $result = $id->update($validateData);
        if($result) {
            return redirect('/student/all')->with('success','Data siswa berhasil diedit');
        }
    }

    public function destroy(Student $student) {
        $result = Student::destroy($student -> id);

        if ($result) {
            return redirect('student/all')->with('success','Data siswa berhasil dihapus');
        }
    }
}