<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') || {{ config('app.name', 'ModernFS') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode(
                [
                        'csrfToken' => csrf_token(),
                ]
        ); ?>
    </script>
</head>
<body>
<nav class="navbar navbar-light bg-faded">
    <div class="container">

        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'ModernFS') }}
        </a>

        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Forum</a>
            </li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav pull-xs-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu" role="menu">

                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="
                                        event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </li>
            @endif
        </ul>
    </div>
</nav>

@yield('content')

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
