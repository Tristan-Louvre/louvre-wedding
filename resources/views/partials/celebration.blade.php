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
	“I know, you know, that I know you love me “ - Fireworks, Plain White T's.
@endsection

@section('first.image')
	{{ Html::image('/img/colourbox3.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteOneText')
	<h2>Kom kuier eers saam met ons!! We are hosting a spitbraai on the eve of the 2nd of July and would adore it if you, our friends and loved ones, come to celebrate the past 9 years of our friendship and love with us. Basies gaan ons eet, gesels & sommer net lekker saam kuier. There will be some hot & cold drinks for you to enjoy and a cash bar will be available for those thirsty for something more bubbly.</h2>
@endsection

@section('second.image')
	{{ Html::image('/img/colourbox1.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteTwoText')
	<ul>
		<li>Venue:</li>
		<li>ColorBox Studios</li>
		<li>No. 3 Industry Street, Paaden Eiland, Cape Town</li>
		<li>Time:</li>
		<li>16:00 – 22:00</li>
		<li>Dress code:</li>
		<li>Ladies – Casually Pretty,</li>
		<li>Gents – Handsomely Relaxed.</li>
	</ul>
@endsection

@section('third.image')
	{{ Html::image('/img/colourbox2.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteThreeText')
	If anyone wishes to sing/say /read /play anything, anything at all, there will be a mic set up for you to do so after dinner. We would love to hear your inspired words and/or melodies.
@endsection

@section('googleMap')
<div style='overflow:hidden;height:440px;width:700px;'>
	<div id='gmap_canvas' style='height:440px;width:700px;'></div>
	<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div>
@endsection

@section('pageSpecificScripts')
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
	<script type='text/javascript'>
		function init_map() {
			var myOptions = {zoom:15,center:new google.maps.LatLng(-33.9144579,18.71420169999999),mapTypeId: google.maps.MapTypeId.ROADMAP};
			map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
			marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-33.9144579,18.71420169999999)});
			infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>Langverwacht Road, Stellenbosch Farms, Cape Town, 7600<br>'});
			google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
			infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
	</script>
@endsection