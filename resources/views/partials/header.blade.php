@extends('layouts.master')

@section('pageSpecificFonts')
    @yield('pageSpecificFonts')
@endsection

@section('content')

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav nav-pills">
                    <li><a href="celebration">Celebration</a></li>
                    <li><a href="wedding">Ceremony</a></li>
                    <li><a href="gifts">Gifts</a></li>
                    <li><a href="reply">R.S.V.P.</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Replay</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

@yield('featurette')

@endsection

@section('pageSpecificScripts')
    @yield('pageSpecificScripts')
@endsection
