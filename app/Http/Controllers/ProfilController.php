<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
	public function index()
	{
		$profil = Profil::all();

		return view('admin.profil-sekolah.index', compact('profil'));
	}

	public function create()
	{
		return view('admin.profil-sekolah.create');
	}

	public function store(Request $request)
	{
		$request->validate([
			'judul' => 'required',
			'isi' => 'required',
		]);

		$profil = new Profil([
			'judul' => $request->get('judul'),
			'isi' => $request->get('isi'),
		]);

		$profil->save();
		return redirect('admin/profil')->with('success', 'Data Berhasil Disimpan!');
	}

	public function edit($id)
	{
		$profil = Profil::find($id);
		return view('admin.profil-sekolah.edit', compact('profil'));
	}

	public function update(Request $request, $id)
	{
		$request->validate([
			'judul' => 'required',
			'isi' => 'required',
		]);

		$profil = Profil::find($id);
		$profil->judul = $request->get('judul');
		$profil->isi = $request->get('isi');

		$profil->save();

		return redirect('admin/profil')->with('success', 'Data Berhasil Diedit!');
	}

	public function destroy($id)
	{
		$profil = Profil::find($id);
		$profil->delete();

		return redirect('admin/profil')->with('success', 'Data Berhasil Dihapus!');
	}
}
