<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Word Herald Assembly') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

         
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Word Herald Assembly') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
               
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                  
                        <li class="dropdown">
                                <a href="/series" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Messages <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/series">Series</a>
                                        <a href="/singles">Singles</a>
                                    </li>
                            </ul>
                            </li>
                            <li class="dropdown">
                                <a href="/viewarticles" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Articles <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/viewarticles">Articles</a>
                                        <a href="/viewwordpoint">Word Point</a>
                            </li>
                            </ul>
                            </li>
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        @if (Auth::user()->email=="inioluwahh@gmail.com")
                         <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Upload<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/uploadmessage">Messages</a>
                                        <a href="/addevent">Event</a>
                                        <a href="/article">Articles/Picture</a>
                            </li>
                            </ul>
                            </li>
        
                        @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
