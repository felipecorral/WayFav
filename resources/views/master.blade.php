<!-- master.blade.php -->

@extends('layouts.app')

@section('content')

    @if(Auth::check())
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PLAYER Operations</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    </head>
        <div class="container">
        <navbar>
            <?php function activeMenu($url){
                return request()->is($url) ? 'active': '';
                } ?>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li  class="{{ activeMenu('/player') }}"><a href="/player">Jugadores</a></li>
                        <li class="{{ activeMenu('/player/create') }}"><a href="/player/create">Nuevo</a></li>
                    </ul>    
                </div>
            </nav>
        </navbar>
    </div>
        <br><br>
        @yield('include')

        @endif
        @if(Auth::guest())
        <div class="container">
            <div class="col-sm-10">
                <p><h1>No tienes permisos para ver esta página</h1></p>
                <p><h3>Un saludo</h3></p>
            </div>
        </div>
        @endif

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="js/bootstrap.min.js"></script>-->


@endsection

