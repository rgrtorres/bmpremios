<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BM Premios - Vote agora!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="logo"></div>
            </div>

            <nav>
                <ul>
                    <li>
                        <a href="/">INICIO</a>
                    </li>

                    <li>
                        <a href="{{ route('site.premio') }}">O PRÊMIO</a>
                    </li>

                    <li>
                        <a href="{{ route('site.edicoes') }}">EDIÇÕES</a>
                    </li>

                    <li>
                        <a href="{{ route('site.redes_sociais') }}">REDES SOCIAIS</a>
                    </li>

                    <li>
                        <a href="{{ route('site.criador') }}">CRIADOR</a>
                    </li>

                    <li>
                        <a href="{{ route('site.patrocinadores') }}">PATROCINADORES</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>

</html>
