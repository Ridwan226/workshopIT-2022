@extends('admin.template.index')


@section('content')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Mahasiswa</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-xl-12 col-lg-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Form Mahasiswa</h6>
        </div>
        <div class="card-body">
          <form action="{{ url('/mahasiswa/edit/' . $mahasiswa->id) }}" method="post">
            @csrf
            <div class="form-group">
              <label for="nama">Nama Mahasiswa</label>
              <input type="text" class="form-control" id="nama" name="nama" value="{{ $mahasiswa->nama }}"
                placeholder="Enter Nama Mahasiswa">
            </div>
            <div class="form-group">
              <label for="npm">Npm Mahasiswa</label>
              <input type="text" class="form-control" id="npm" name="npm" value="{{ $mahasiswa->npm }}"
                placeholder="Enter Npm">
            </div>
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                value="{{ $mahasiswa->tanggal_lahir }}" placeholder="Enter Date">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat Mahasiswa</label>
              <textarea id="alamat" name="alamat" class="form-control">{{ $mahasiswa->alamat }}</textarea>
            </div>

            <div class="form-group">
              <label for="fakultas">Fakultas Mahasiswa</label>
              <select class="form-control" name="fakultas_id">
                @foreach ($fakultas as $item)
                  <option value="{{ $item->id }}" {{ $item->id == $mahasiswa->fakultas_id ? ' selected' : '' }}>
                    {{ $item->nama }}</option>
                @endforeach
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>
      </div>


    </div>
  </div>
@endsection
