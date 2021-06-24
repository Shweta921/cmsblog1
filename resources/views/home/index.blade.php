<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
body {
  background: #e2e2e2;
}

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    @if (Route::has('login'))
    @auth
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('students.index') }}">Add Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('profile.show') }}">Profile</a>
      </li>
      <li class="nav-item">
      <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        this.closest('form').submit();">
            {{ __('Log Out') }}
        </a>
    </form>
    </li>
      @else
            <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
        @endif
        </ul>
      
    </div>
</nav>


<div class="row">

        @foreach($students as $student)
        <div class="col-md-4">
                <div class="card" style="width: 30rem;margin:3rem">
                <img src="{{ url('/uploads') . '/' . $student->img }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h1>{{ $student->blogname }}</h1>
                <div>
                <p class="card-text">{{ $student->desc }}</p>
                </div>    
                </div>
                </div>
                </div>
        @endforeach
        </div>
        
</body>
</html>