<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/formularios.css') }}">
    </head>
    <body>
    @extends('navbar')
    @section('contentP')
        <div class="container-fluid">
            <div class="navbar bg-success justify-content-center text-white">
            <h1>LISTA DE ESCUELAS</h1>
        </div>
        </div>
    
        <div class="c-container">
        @yield('content_school')
        </div>

    <div class="bg-secondary fixed-bottom container-fluid footer">
        <h5 class="text-white">Copyright SheCodes since 2023</h5>
    </div>
    @endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>