<link rel="stylesheet" href="{{ asset('css/formularios.css') }}">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('Home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ url('cursos') }}">Course</a>
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
          <a class="nav-link" href="{{ url('estudiantes') }}">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('maestros') }}">Teacher</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  @yield('contentP')
</div>