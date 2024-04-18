@extends('layouts.auth')
@section('content')
  <div class="col-4">
    @if (session('failed'))
      <div class="alert alert-danger" role="alert">
        {{ session('failed') }}
      </div>
    @endif
    <div class="card">
      <div class="card-header">
        <h4 class="text-center">Login</h4>
      </div>
      <div class="card-body">
        <form method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">
          </div>
          <div class="mb-3">
            <label class="form-label" for="password">password</label>
            <input class="form-control" type="password" name="password" id="password">
          </div>
          <button class="btn btn-primary w-100">Login</button>
          {{-- <p class="mb-0 text-center">belum punya akun ? <a href="{{ route('regis.view') }}">registrasi</a></p> --}}
        </form>
      </div>
    </div>
  </div>
@endsection
