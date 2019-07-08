<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        @guest
                        @else
                            <li><a href="{{ route('analise.index') }}">Analise</a></li>
                            <!--- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Fios <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('rawmaterials.index') }}">Lista Fios</a></li>
                                    <li><a href="{{ route('rawmaterials.overprice') }}">Atualiza Preços</a></li>
                                </ul>    
                            </li> 
                            --->
                            <li><a href="{{ route('rawmaterials.index') }}">Fios</a></li>
                            <li><a href="{{ route('knittings.index') }}">Malharia</a></li>
                            <li><a href="{{ route('dyeings.index') }}">Tinturaria</a></li>
                            <li><a href="{{ route('boms.index') }}">BOM</a></li>
                            <li><a href="{{ route('criterias.index') }}">Critérios</a></li>
                            <li><a href="{{ route('destinations.index') }}">Destinos</a></li>
                            <li><a href="{{ route('packagings.index') }}">Embalagens</a></li>
                        @endguest
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            @if (Auth::user()->isAdmin())
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <li><a href="{{ route('users.index') }}">Users</a></li>
                            @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<div class="container">
        @yield('content')
</div>        
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function () {
        window.setTimeout(function() {
            $(".alert").fadeTo(1500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 2000);
        
        $('#valueorigin').focusout(function() {
            var icms = $('#icms').val()/100;
            calc($('#valueorigin').val(), icms);
        });
        $('#icms').focusout(function() {
            var icms = $('#icms').val()/100;
            calc($('#valueorigin').val(), icms);
        });
        
        });
        
        var calc = function(int, icms) {
            if (int > 0 && icms > 0) {
                var com = int - (int * 0.0925);
                var sem = com - (int * icms);
                //alert(com);
                $('#valueicms').val(com.toFixed(4));
                $('#value').val(sem.toFixed(4));
            }    
        }
    </script>
    @yield('page-scripts')
</body>
</html>
