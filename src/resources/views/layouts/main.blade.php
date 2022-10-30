<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
</head>

<body>
    <header class="navbar">
        <header>
            <div class="header-container">
                <div class="items"><a href="{{ URl('/') }}"><button>Home</button></a>
                    <a href="{{ URl('cadastro') }}"><button>Cadastrar</button></a>
                </div>
                <div class="box-pesquisar">
                    <form action="/search/{nome}" method="GET">
                        <label class="label-pesquisar">Pesquisar :<input type="text" name='nome' id="search" />
                            <button type="submit">Pesquisar</button>
                        </label>
                    </form>
                </div>
            </div>
        </header>
    </header>
    @yield('content')


    <footer>
        <p>primeiro projeto &copy; 2022</p>
    </footer>

</body>

</html>
