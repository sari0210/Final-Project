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