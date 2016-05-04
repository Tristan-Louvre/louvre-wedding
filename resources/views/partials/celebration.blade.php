@extends('partials.featurette')

@section('pageSpecificFonts')
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:500italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=IM+Fell+French+Canon:400italic' rel='stylesheet' type='text/css'>
@endsection

@section('css')celebration @endsection

@section('music')
	"/audio/Celebration.mp3"
@endsection

@section('title')
	Celebration
@endsection

@section('sub-title')
	“I know, you know, that I know you love me” - Fireworks, Plain White T's.
@endsection

@section('first.image')
	{{ Html::image('/img/colourbox3.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteOneText')
	<h1>Kom kuier saam met ons!</h1>
	<h2>We are hosting a spitbraai to celebrate the past 9 years of our friendship and love, with you our friends and loved ones.</h1>
@endsection

@section('second.image')
	{{ Html::image('/img/colourbox1.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteTwoText')
	<h3>Ons gaan fees vier & sommer net mekaar se geselskap geniet. There will be a variety of hot & cold drinks for you to enjoy. A cash bar will also be available for those thirsty for something stronger.</h3>
	<h3>After the formal speeches if anyone else wishes to <br> sing /say /read /play anything, there will be an opportunity to do so. We would love to hear your inspired words and/or melodies.</h3>
@endsection

@section('third.image')
	{{ Html::image('/img/colourbox2.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteThreeText')


@endsection

@section('googleMap')
	<div id='gmap_canvas' style='height:440px;width:700px;'></div>
	<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
@endsection

@section('featuretteFourText')
	<h3>
		<ul>
			<li><strong>Date:</strong></li>
			<li>2nd July, 2016</li>
			<li><strong>Time:</strong></li>
			<li>16:00 ~ 22:00</li>
			<li><strong>Dress code:</strong></li>
			<li>Ladies ~ Casually Pretty,</li>
			<li>Gents ~ Handsomely Relaxed.</li>
			<li><strong>Venue:</strong></li>
			<li>ColorBox Studios</li>
			<li>No. 3 Industry Street, Paaden Eiland, Cape Town</li>
		</ul>
	</h3>
@endsection

@section('pageSpecificScripts')
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
	<script type='text/javascript'>
		function init_map() {
			var myOptions = {zoom:15,center:new google.maps.LatLng(-33.9167413,18.4627149),mapTypeId: google.maps.MapTypeId.ROADMAP};
			map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
			marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-33.9167413,18.4627149)});
			infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>Colourbox Studios, 3 Industry Street, Paarden Eiland, Cape Town, 7405<br>'});
			google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
			infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
	</script>
@endsection