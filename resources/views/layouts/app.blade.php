<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a href="/" class="nav-link">Cursos</a>
                </li>
                <li class="nav-item">
                <a href="/courses/create" class="nav-link">Criar Cursos</a>
                </li>                          
            </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        @yield('content') <!-- Aqui é onde o conteúdo específico da página será exibido -->
    </div>
<footer>
    <p>DBL Cursos Online &copy; 2023</p>
</footer>
</body>
</html>
