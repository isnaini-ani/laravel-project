<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;

class SiswaController extends Controller
{
    public function index()
    {
    	$siswa = Siswa::all();

    	return view('admin.siswa.index', compact('siswa'));
    }

    public function create()
    {
    	return view('admin.siswa.create');
    }

    public function store(Request $request)
    {
    	$email = $request->email;
    	$user_id = DB::table('users')->where('email', $email)->value('id');

    	$request->validate([
    		'nis' => 'required',
    		'nama_lengkap' => 'required',
    		'jk' => 'required',
    		'alamat' => 'required',
    		'no_telp' => 'required',
    	]);

    	$siswa = new Siswa([
    		'nis' => $request->nis,
    		'nama_lengkap' => $request->nama_lengkap,
    		'jk' => $request->jk,
    		'alamat' => $request->alamat,
    		'no_telp' => $request->no_telp,
    		'user_id' => $user_id,
    	]);

    	$siswa->save();

    	return redirect('admin/siswa')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
    	$siswa = Siswa::where('nis', $id)->first();

    	return view('admin.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
    	$siswa = Siswa::where('nis', $id)->first();

        $siswa->nis = $request->get('nis');
        $siswa->nama_lengkap = $request->get('nama_lengkap');
        $siswa->jk = $request->get('jk');
        $siswa->alamat = $request->get('alamat');
        $siswa->no_telp = $request->get('no_telp');

    	$siswa->save();

    	return redirect('admin/siswa')->with('success', 'Data berhasil diperbaharui!');
    }

    public function destroy($id)
    {
    	$siswa = Siswa::where('nis', $id)->first();

    	$siswa->delete();

    	return redirect('admin/siswa')->with('success', 'Data berhasil dihapus!');
    }
}
