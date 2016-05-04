@extends('partials.header')

@section('pageSpecificFonts')
    @yield('pageSpecificFonts')
@endsection


@section('featurette')
    <audio>
        <source src=@yield('music') type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <!-- Featurettes
    ================================================== -->

    <div class="container marketing">

        <!-- START THE FEATURETTES -->
        <h1 class="page-header">@yield('title')</h1>
        <h3 class="sub-header">@yield('sub-title')</h3>

        <div class="row featurette vertical-align">
            <div class="col-md-4 col-md-push-1">
                @yield("first.image")
            </div>
            <div class="col-md-5 col-md-push-2">
                <span>@yield('featuretteOneText')</span>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette vertical-align">
            <div class="col-md-5 col-md-push-1">
                @yield('featuretteTwoText')
            </div>
            <div class="col-md-4 col-md-push-2">
                @yield("second.image")
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette vertical-align">
            <div class="col-md-4 col-md-push-1">
                @yield("third.image")
            </div>
            <div class="col-md-5 col-md-push-2">
                @yield('featuretteThreeText')
                @yield('featuretteFourText')
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette vertical-align">
            <div class="col-md-4 col-md-push-2">
                @yield('googleMap')
            </div>
        </div>
        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->

@endsection
