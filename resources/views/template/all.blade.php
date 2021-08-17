<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stories</title>
    <style>
        footer {
            position:fixed;
            bottom: 0;
            left: 0;
            width:100%; 
        }
    </style>
</head>
<body>
    <header> 
        @auth
        <a href="../write">
            <button>Escrever</button>
        </a>
        @endauth
        <a href="/login">
            <button>Entrar</button>
        </a>
        @auth
            <a href="/user/{{Auth::user()->id}}">{{Auth::user()->name}}</a>
            <a href="/logout">
                <button>Sair</button>
            </a>
        @endauth
    </header>

    <div class="container">
        @yield("st")
    </div>

    <footer>
        @yield("exit")
    </footer>
</body>
</html>