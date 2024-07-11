<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Apuestas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2;
        }
        .navbar {
            background-color: #03A6A6;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">De Chiripa SA</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('apuestas.index') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/apuestas/mas-jugadores') }}">Apuestas con más de 3 jugadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/apuestas/comparar') }}">Comparar Apuestas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/apuestas/buscar') }}">Buscar Apuestas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/apuestas/crear') }}">Crear Apuesta</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
    <footer class="text-center mt-4">
        <p>&copy; 2024 De Chiripa SA. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
