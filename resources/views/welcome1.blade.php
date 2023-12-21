<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f3f4f6;
            color: #1c1c1c;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        .title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #3b82f6;
        }

        .links {
            margin-top: 1rem;
        }

        .links a {
            color: #6b7280;
            margin: 0 1rem;
            text-decoration: none;
            font-weight: 600;
        }

        .links a:hover {
            color: #374155;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">
            Welcome to Open Event Mangament!
        </div>

        <div class="links">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</body>
</html>
