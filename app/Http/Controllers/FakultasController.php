<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class FakultasController extends Controller
{
  public function viewFakultas()
  {
    $fakultas = Fakultas::all();
    return view('admin.fakultas.list')->with(compact('fakultas'));
  }
  public function addFakultas()
  {
    return view('admin.fakultas.add');
  }

  public function storeFakultas(Request $request)
  {
    $request->validate([
      'nama' => 'required|max:255',
    ]);

    $saveData = Fakultas::create([
      'nama' => $request->nama,
      'deskripsi' => $request->deskripsi,
    ]);

    if ($saveData) {
      return redirect()->back()->with(['success' => 'Data Berhasil Diinput']);
    } else {
      return redirect()->back()->with(['error' => 'Data Gagal diInput']);
    }
  }

  public function editFakultas($id)
  {
    $fakultas = Fakultas::find($id);
    if (!$fakultas) {
      return redirect()->back()->with(['error' => 'Data Tidak Tersedia']);
    }

    return view('admin.fakultas.edit')->with(compact('fakultas'));
  }

  public function updateFakultas(Request $request, $id)
  {
    $request->validate([
      'nama' => 'required|max:255',
    ]);

    $fakultas = Fakultas::find($id);
    if (!$fakultas) {
      return redirect()->back()->with(['error' => 'Data Tidak Tersedia']);
    }

    $dataUpdate = [
      'nama' => $request->nama,
      'deskripsi' => $request->deskripsi,
    ];

    $fakultas->update($dataUpdate);

    return redirect()->back()->with(['success' => 'Data Berhasil diUpdate']);
  }

  public function deleteFakultas($id)
  {
    $fakultas = Fakultas::find($id);
    if (!$fakultas) {
      return redirect()->back()->with(['error' => 'Data Tidak Tersedia']);
    }
    $fakultas->delete();
    return redirect()->back()->with(['success' => 'Data Berhasil diHapu']);
  }

  public function detailFakultas($id)
  {
    $fakultas = Fakultas::find($id);
    if (!$fakultas) {
      return redirect()->back()->with(['error' => 'Data Tidak Tersedia']);
    }
    return view('admin.fakultas.detail')->with(compact('fakultas'));
  }
}
