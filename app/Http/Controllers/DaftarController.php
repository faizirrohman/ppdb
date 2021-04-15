<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        $daftar = Daftar::latest()->get();
        return view('admin.daftar.index', compact('daftar'));
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Daftar::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.daftar.index')->with('success', 'Data berhasil di simpan');
    }

    public function edit($id)
    {
        $daftar = Daftar::findOrFail($id);
        return view('admin.daftar.edit', compact('daftar'));
    }

    public function update(Request $request, $id)
    {
         //melakukan validasi data
         $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Daftar::findOrFail($id)->update($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.daftar.index')->with('success', 'Data berhasil di perbaharui');
    }

    public function destroy($id)
    {
        $data = Daftar::findOrFail($id);
        $data->delete();
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('admin.daftar.index')->with('success', 'Data berhasil di hapus');
    }
}
