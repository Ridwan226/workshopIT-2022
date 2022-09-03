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
          <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
        </div>
        <div class="card-body">

          <dl class="row">
            <dt class="col-sm-3">Nama</dt>
            <dd class="col-sm-9">{{ $mahasiswa->nama }}</dd>
            <dt class="col-sm-3">Npm</dt>
            <dd class="col-sm-9">{{ $mahasiswa->npm }}</dd>
            <dt class="col-sm-3">Fakultas</dt>
            <dd class="col-sm-9">{{ $mahasiswa->fakultas->nama }}</dd>
            <dt class="col-sm-3">Tanggal Lahir</dt>
            <dd class="col-sm-9">{{ $mahasiswa->tanggal_lahir }}</dd>
            <dt class="col-sm-3">Alamat</dt>
            <dd class="col-sm-9">{{ $mahasiswa->alamat }}</dd>
          </dl>
        </div>
      </div>

      <a class="btn btn-primary" href="{{ url('/mahasiswa/') }}">Back</a>
    </div>
  </div>
@endsection
