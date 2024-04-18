@extends('layouts.auth')
@section('content')
  <div class="col-4">
    @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        {{ $errors->first() }}
      </div>
    @endif
    <div class="card">
      <div class="card-header">
        <h4 class="text-center">Registrasi</h4>
      </div>
      <div class="card-body">
        <form method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name">
          </div>
          <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">
          </div>
          <div class="mb-3">
            <label class="form-label" for="password">password</label>
            <input class="form-control" type="password" name="password" id="password">
          </div>
          <button class="btn btn-primary w-100">Registrasi</button>
          <p class="mb-0 text-center">sudah punya akun ? <a href="{{ route('login.view') }}">login</a></p>
        </form>
      </div>
    </div>
  </div>
@endsection
