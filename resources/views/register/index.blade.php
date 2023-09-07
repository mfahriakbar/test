@extends('layouts.main')
@section('isi')

<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-register">
      <h1 class="h3 mb-3 mt-3 fw-normal text-center">Register</h1>
      <form action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="name" name="name" class="form-control @error('name') is-invalid
          @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="username" name="username" class="form-control @error('username') is-invalid
          @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="notelp" name="notelp" class="form-control @error('notelp') is-invalid
          @enderror" id="notelp" placeholder="No Telepon" required value="{{ old('notelp') }}">
          <label for="notelp">No Telepon</label>
          @error('notelp')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid
          @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password') is-invalid
          @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3"><a href="/login">Login</a></small>
    </main>
  </div>
</div>
  
@endsection