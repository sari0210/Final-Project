
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Bienvenida</title>
</head>
<body>
<link rel="stylesheet" href="{{ asset('css/formularios.css') }}">

<h1>Bienvenid@</h1>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{ url('cursos') }}">Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('grupos') }}">Groups</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('tareas') }}">Homeworks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('inscripciones') }}">Inscriptions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('escuelas') }}">School</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('estudiantes') }}">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('maestros') }}">Teacher</a>
        </li>
      </ul>
      <form class="d-flex" action="{{ url('/') }}">
            
            @csrf
          <button class="btn btn-danger mx-4" type="submit">Cerrar Sesion</button>
          
        </form>
        <form class="d-flex" action="{{ route('usuarios') }}">
            
            @csrf
          <button class="btn btn-primary mx-4" type="submit">Add New User</button>
          
        </form>

        
    </div>
  </div>
</nav>
<div>
  <img src="{{ url('/') }}/img/academia.jpg" class="rounded mx-auto d-block" alt="...">
</div>



<div class="container-fluid">
  @yield('contentP')
</div>
</body>
</html>