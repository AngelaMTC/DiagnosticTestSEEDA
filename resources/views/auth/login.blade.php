@extends('layouts.app')

@section('title', 'Login')

@section('content')


<center>
<div class="block my-5 p-50 bg-white w-75 border border-gray-200 rounded-lg shadow-lg d-flex justify-content-center">

<form class="mt-4" method="POST" action="">
    @csrf
    @method('POST')

    <div class="mb-3">
        <h1 class="text-3xl font-bold">Login</h1>
        <br>
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Email" id="email">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" id="password">
      </div>
      @error('message')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
      {{-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> --}}
      <button type="submit" class="btn btn-primary">Submit</button>

      <br>
      <br>
</form>
</div>
</center>
@endsection