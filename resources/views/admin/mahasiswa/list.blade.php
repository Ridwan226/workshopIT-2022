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
          <a href="{{ url('mahasiswa/add') }}" class="btn btn-primary "> Add Data</a>
        </div>
        <div class="card-body">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Fakultas</th>
                <th scope="col">tanggal lahir</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mahasiswa as $item)
                <tr>
                  <th scope="row">{{ $item->nama }}</th>
                  <td>{{ $item->npm }}</td>
                  <td>{{ $item->fakultas->nama }}</td>
                  <td>{{ $item->tanggal_lahir }}</td>
                  <td>
                    <a href="{{ url('mahasiswa/detail/' . $item->id) }}" class="btn btn-primary btn-sm">View</a>
                    <a href="{{ url('mahasiswa/edit/' . $item->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <a href="{{ url('/mahasiswa/delete/' . $item->id) }}" class="btn btn-danger btn-sm delete"
                      onclick="return confirm('Are you sure?')">Delete</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>


    </div>
  </div>

  <script>
    $('.delete').on('click', function() {
      return confirm('Are you sure?');
    });
  </script>
@endsection
