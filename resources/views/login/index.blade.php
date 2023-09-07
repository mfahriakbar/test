@extends('layouts.main')
@section('isi')

<div class="row justify-content-center">
  <div class="col-md-4">
    
    @if (session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        
    @endif

    @if (session()->has('LoginError'))

    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
      {{ session('LoginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        
    @endif

    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="username" name="username" class="form-control @error('username') is-invalid
          @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        {{-- <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div> --}}
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3"><a href="/register">Register</a></small>
    </main>
    <h5>username : tamu</h5>
    <h5>password : tamu</h5>
  </div>
</div>
  
@endsection