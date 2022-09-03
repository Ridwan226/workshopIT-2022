@extends('admin.template.index')


@section('content')
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-xl-12 col-lg-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Form Fakultas</h6>
        </div>
        <div class="card-body">
          <form action="{{ url('/fakultas/add') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="nama">Nama Fakultas</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama Mahasiswa">
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi Fakultas</label>
              <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>
      </div>


    </div>
  </div>
@endsection
