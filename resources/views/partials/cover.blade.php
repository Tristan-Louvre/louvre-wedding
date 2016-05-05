@extends('layouts.master')

@section('pageSpecificFonts')
    <link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
@endsection

@section('css')coverBody @endsection

@section('content')
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <h1>Wedding Invite</h1>
            <div class="cover-container">

                <div class="inner cover">
                    <video id="stopMotionInvite" controls width="600">
                        <source src="/vid/stopmotionInvite.mp4" type="video/mp4">
                    </video>
                    <div row button>
                        <div class="col-md-2 col-md-push-10">
                            <a href="wedding" class="btn btn-lg btn-default">skip</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('pageSpecificScripts')

    <script type="text/javascript">
        $(document).ready(function(){
            $("#stopMotionInvite").bind('ended', function(){
                location.href="wedding";
            });
        });
    </script>

@endsection