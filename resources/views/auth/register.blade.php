@extends('layouts.app')

@section('title', 'Register')

@section('content')


<center>
<div class="block my-5 p-50 bg-white w-75 border border-gray-200 rounded-lg shadow-lg d-flex justify-content-center">

<form class="mt-4" method="POST" action="">
    @csrf
    @method('POST')

    <div class="mb-3">
        <h1 class="text-3xl font-bold">Register</h1>
        <br>
        <label for="exampleInputName" class="form-label">Username</label>
        <input type="text" class="form-control" name="name" placeholder="Username" id="name">
        @error('name')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
      </div>
      
    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Email" id="email">
        @error('email')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
      </div>


      <div class="mb-3">
        <label for="exampleInputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" id="password">
        @error('password')
      <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
      @enderror
        <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" id="password_confirmation">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>

      <br>
      <br>
</form>
</div>
</center>
@endsection