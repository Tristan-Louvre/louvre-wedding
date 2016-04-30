@extends('layouts.master')

@section('pageSpecificFonts')
    @yield('pageSpecificFonts')
@endsection

@section('content')

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="celebration">Celebration</a></li>
                    <li><a href="wedding">Ceremony</a></li>
                    <li><a href="gifts">Gifts</a></li>
                    <li><a href="reply">RSVP</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

@yield('featurette')

@endsection

@section('pageSpecificScripts')
    @yield('pageSpecificScripts')
@endsection
