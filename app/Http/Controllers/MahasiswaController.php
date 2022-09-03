<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
  public function viewMahasiswa()
  {
    $mahasiswa = Mahasiswa::all();
    return view('admin.mahasiswa.list')->with(compact('mahasiswa'));
  }

  public function addMahasiswa()
  {
    $fakultas = Fakultas::all();
    return view('admin.mahasiswa.add')->with(compact('fakultas'));
  }

  public function storeMahasiswa(Request $request)
  {
    $request->validate([
      'nama' => 'required|max:255',
      'npm' => 'required|max:10|unique:mahasiswas',
      'fakultas_id' => 'required',
      'alamat' => 'max:255',
    ]);

    $saveData = Mahasiswa::create([
      'nama' => $request->nama,
      'npm' => $request->npm,
      'tanggal_lahir' => $request->tanggal_lahir,
      'fakultas_id' => $request->fakultas_id,
      'alamat' => $request->alamat,
    ]);

    if ($saveData) {
      return redirect()->back()->with(['success' => 'Data Berhasil Diinput']);
    } else {
      return redirect()->back()->with(['error' => 'Data Gagal diInput']);
    }
  }
  public function editMahasiswa($id)
  {
    $mahasiswa = Mahasiswa::find($id);
    $fakultas = Fakultas::all();
    if (!$mahasiswa) {
      return redirect()->back()->with(['error' => 'Data Tidak Tersedia']);
    }

    return view('admin.mahasiswa.edit')->with(compact('mahasiswa', 'fakultas'));
  }

  public function updateMahasiswa(Request $request, $id)
  {

    $request->validate([
      'nama' => 'required|max:255',
      'npm' => 'required|max:10|unique:mahasiswas,npm,' . $id,
      'fakultas_id' => 'required',
      'alamat' => 'max:255',
    ]);

    $mahasiswa = Mahasiswa::find($id);
    if (!$mahasiswa) {
      return redirect()->back()->with(['error' => 'Data Tidak Tersedia']);
    }

    $dataUpdate = [
      'nama' => $request->nama,
      'npm' => $request->npm,
      'tanggal_lahir' => $request->tanggal_lahir,
      'fakultas_id' => $request->fakultas_id,
      'alamat' => $request->alamat,
    ];

    $mahasiswa->update($dataUpdate);

    return redirect()->back()->with(['success' => 'Data Data Berhasil diUpdate']);
  }

  public function deleteMahasiswa($id)
  {
    $mahasiswa = Mahasiswa::find($id);
    if (!$mahasiswa) {
      return redirect()->back()->with(['error' => 'Data Tidak Tersedia']);
    }

    $mahasiswa->delete();
    return redirect()->back()->with(['success' => 'Data Data Berhasil diHapus']);
  }

  public function detailMahasiswa($id)
  {
    $mahasiswa = Mahasiswa::find($id);
    if (!$mahasiswa) {
      return redirect()->back()->with(['error' => 'Data Tidak Tersedia']);
    }

    return view('admin.mahasiswa.detail')->with(compact('mahasiswa'));
  }
}
