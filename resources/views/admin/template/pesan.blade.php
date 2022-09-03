@if (Session::has('error'))
  <div class="alert alert-danger" role="alert">
    Oppss.... {{ session('error') }}
  </div>
@endif

@if (Session::has('success'))
  <div class="alert alert-info" role="alert">
    Yaiiii.... {{ session('success') }}
  </div>
@endif

@if (count($errors) > 0)
  @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      Oppss.... {{ $error }}
    </div>
  @endforeach
@endif
