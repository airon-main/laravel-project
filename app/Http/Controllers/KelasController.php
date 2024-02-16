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

    public function add()
    {
        return view("kelas.add",[
            "title" => "Add Kelas",
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama'      => 'required|max:255',
        ]);

        $result = Kelas::create($validateData);
        if($result) {
            return redirect('/kelas/all')->with('success','Data kelas berhasil ditambahkan');
        }
    }

    public function edit(Kelas $kelas) {
        return view("kelas.edit",[
            "title" => "Edit Kelas",
            "kelas" => Kelas::find($kelas->id) //* Route model binding,
        ]);
    }

    public function update(Request $request, $id) {
        $validateData = $request->validate([
            'nama'      => 'required|max:255',
        ]);

        $id = Kelas::findOrFail($id);
        $result = $id->update($validateData);
        if($result) {
            return redirect('/kelas/all')->with('success','Data kelas berhasil diedit');
        }
    }

    public function destroy(Kelas $kelas) {
        $result = Kelas::destroy($kelas -> id);

        if ($result) {
            return redirect('kelas/all')->with('success','Data kelas berhasil dihapus');
        }
    }
}
