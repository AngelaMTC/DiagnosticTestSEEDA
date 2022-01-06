<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Diagnostic Exam.</title>
    
    <!-- Tailwind CSS Link -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css"> --}}
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
    
  </head>
  <body class="bg-gray-100 text-gray-800">
    <!-- Document body -->

    <nav class="navbar navbar-light bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" style="color:#ffffff;">Seguridad en el Desarrollo de Apps</a>
        
        @if (auth()->check())
        <p style="color:#ffffff" class="text-xl">Welcome<b> {{auth()->user()->name}}</b></p>      
        <form class="d-flex">
          <div class="btn-group">
            <a href="{{route('login.destroy')}}" class="btn btn-danger active" aria-current="page">Log Out</a>
            {{-- <a href="{{route('register.store')}}" class="btn btn-warning">Register</a> --}}
          </div>
        </form>
        @else
        <form class="d-flex">
          <div class="btn-group">
            <a href="{{route('login.store')}}" class="btn btn-success active" aria-current="page">Log In</a>
            <a href="{{route('register.store')}}" class="btn btn-warning">Register</a>
          </div>
        </form>
      </div>
      @endif
    </nav>

      @yield('content')

      

  </body>
</html>