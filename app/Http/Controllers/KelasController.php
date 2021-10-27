<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
    	$kelas = Kelas::all();

    	return view('admin.kelas.index', compact('kelas'));
    }

    public function create()
    {
    	return view('admin.kelas.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'id' => 'required',
    		'nama' => 'required',
    		'tingkat' => 'required',
    		'jurusan' => 'required',
    	]);

    	$kelas = new Kelas([
    		'id' => $request->get('id'),
    		'nama' => $request->get('nama'),
    		'tingkat' => $request->get('tingkat'),
    		'jurusan' => $request->get('jurusan'),
    	]);

    	$kelas->save();
    	return redirect('admin/kelas')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit($id)
    {
    	$kelas = Kelas::where('kode', $id)->first();
    	return view('admin.kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::where('kode', $id)->first();
        $kelas->kode = $request->get('kode');
        $kelas->nama = $request->get('nama');
        $kelas->tingkat = $request->get('tingkat');
        $kelas->jurusan = $request->get('jurusan');

        $kelas->save();

        return redirect('admin/kelas')->with('success', 'Data Berhasil Diedit!');
    }

    public function destroy($id)
    {
        $kelas = Kelas::where('kode', $id)->first();
    	$kelas->delete();

    	return redirect('admin/kelas')->with('success', 'Data Berhasil Dihapus!');
    }
}
