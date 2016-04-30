@extends('partials.featurette')

@section('pageSpecificFonts')
	<link href='https://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:500italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=IM+Fell+French+Canon:400italic' rel='stylesheet' type='text/css'>
@endsection

@section('css')wedding @endsection

@section('music')
	"/audio/Ceremony.mp3"
@endsection

@section('title')
	Ceremony
@endsection

@section('sub-title')
	”You and me, we belong together. Just like a breath needs the air” - You and Me, You+Me.

@endsection

@section('first.image')
	{{ Html::image('/img/ceremony1.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteOneText')
	Your presence alone is gift enough, but if you would like to bless us with something tangible anything would be greatly appreciated – from a single flower to a trip to New Zealand ;) What we would really love though, is some financial help towards investing in our first piece of property.
@endsection

@section('second.image')
	{{ Html::image('/img/ceremony3.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteTwoText')

@endsection

@section('third.image')
	{{ Html::image('/img/ceremony2.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteThreeText')

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