<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css"/>
        <script src="/js/scripts.js"></script>
    </head>
    <body class="antialiased">
        <header>
            <nav class="navbar navbar-light fixed-top">
                <div class="container-fluid">
                <a class="navbar-brand text-white" href="/">
                    <img src="/img/bola.png" alt="" width="30" height="30" class="d-inline-block align-text-top img">
                    Guess
                </a>
                </div>
            </nav>
        </header>

        @yield('content')
        
        <footer>
            <p>Guess &copy; 2022</p>
        </footer>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>