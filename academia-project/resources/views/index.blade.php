<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="{{ asset('css/formularios.css') }}">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('cursos') }}">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('grupos') }}">Grupos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('tareas') }}">Tareas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('inscripciones') }}">Inscripcion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('escuelas') }}">Escuela</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('estudiantes') }}">Estudiante</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('maestros') }}">Maestro</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  @yield('contentP')
</div>
</body>
</html>