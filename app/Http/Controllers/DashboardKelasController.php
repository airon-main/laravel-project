<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class DashboardKelasController extends Controller
{
    public function index()
    {
        return view("dashboard.kelas.all",
        [   
            "title" => "Kelas",
            "kelass" => Kelas::all(),
            'active' => 'kelas',
        ]);
    }

    public function show($id)
    {
        return view("dashboard.kelas.detail",[
            "title" => "Detail Kelas",
            "kelas" => Kelas::find($id), //* Route model binding,
            'active' => 'kelas',
        ]);
    }

    public function add()
    {
        return view("dashboard.kelas.add",[
            "title" => "Add Kelas",
            'active' => 'kelas',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama'      => 'required|max:255',
        ]);

        $result = Kelas::create($validateData);
        if($result) {
            return redirect('/dashboard/kelas/all')->with('success','Data kelas berhasil ditambahkan');
        }
    }

    public function edit(Kelas $kelas) {
        return view("dashboard.kelas.edit",[
            "title" => "Edit Kelas",
            "kelas" => Kelas::find($kelas->id), //* Route model binding,
            'active' => 'kelas',
        ]);
    }

    public function update(Request $request, $id) {
        $validateData = $request->validate([
            'nama'      => 'required|max:255',
        ]);

        $id = Kelas::findOrFail($id);
        $result = $id->update($validateData);
        if($result) {
            return redirect('dashboard/kelas/all')->with('success','Data kelas berhasil diedit');
        }
    }

    public function destroy(Kelas $kelas) {
        $result = Kelas::destroy($kelas -> id);

        if ($result) {
            return redirect('dashboard/kelas/all')->with('success','Data kelas berhasil dihapus');
        }
    }
}
