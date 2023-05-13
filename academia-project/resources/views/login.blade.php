<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('/') }}/css/estilos.css">
    <title>Inicio de Sesion</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <form action="{{route('Home')}}" method="POST" id="login" class="w-50 p-3 my-3">
                @method('GET')
                <!-- p-4: padding de 1.5rem 
                    1 rem = 16px
                    0.5 rem = 8px
                    

                -->
               
                <div class="p-4" style="border: 1px solid #ced4da; border-radius: 12px;">
                    
                    <div class="text-center">
                        <img src="/img/user.png" alt="logo" id="logo" style="height: 75px; width: 75px; margin-bottom: 35px; opacity: 0.6">
                    </div>
                    <label for=""><i class="bi bi-envelope"></i> Correo Electronico</label>
                    <input type="text" class="form-control" name="usser" placeholder="Ingrese su usuario" required><br>
                    <label for=""><i class="bi bi-key"></i> Contraseña</label>
                    <input type="password" class="form-control" name="pass" placeholder="Ingrese su contraseña" required><br>
                    
                    <input type="submit" class="btn btn-primary" value="Iniciar sesion">
                </div>
            </form>
        </div>