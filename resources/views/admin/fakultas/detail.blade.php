@extends('admin.template.index')


@section('content')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Fakultas</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-xl-12 col-lg-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Detail Fakultas</h6>
        </div>
        <div class="card-body">

          <dl class="row">
            <dt class="col-sm-3">Nama</dt>
            <dd class="col-sm-9">{{ $fakultas->nama }}</dd>
            <dt class="col-sm-3">Description</dt>
            <dd class="col-sm-9">{{ $fakultas->deskripsi }}</dd>
          </dl>
        </div>
      </div>

      <a class="btn btn-primary" href="{{ url('/fakultas/') }}">Back</a>
    </div>
  </div>
@endsection
