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
	<h2>Marguerite Bredell <br> & <br>Byron Victor Jones <br> </h2> <h2>would love for you to join them at their wedding ceremony. Vows will be exchanged at AltydLig on Sunday, the third of July, two thousand and sixteen.</h2>
@endsection

@section('second.image')
	{{ Html::image('/img/ceremony3.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteTwoText')
	<h2>Guests are asked to arrive by 1pm in order for the wedding to start promptly. The couple would like for you to come dressed in semi-formal attire. After the ceremony there will be a small reception with tea, coffee and cake being served.</h2>
@endsection

@section('third.image')
	{{ Html::image('/img/ceremony2.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteThreeText')
	<h3>Directions to AltydLig:</h3>
	<h4>
	<strong>FROM R300 STELLENBOSCH ARTERIAL OFFRAMP</strong> <br>
	Turn towards Stellenbosch <br>
	After passing Zevenwacht Mall, turn left into <br>
	Zevenwacht Link Road <br>
	Right into Langverwacht Road <br>
	After circle, turn right (on bend) <br>
	At stop street, turn left <br>
	Turn right onto paved road to Altydlig <br>
	</h4>
	<h4>
		<strong>FROM R300 KUILS RIVER OFFRAMP</strong> <br>
		Turn towards Kuilsriver (van Riebeeck Road) <br>
		Left into Langverwacht Road <br>
		After 4th circle, turn right (on bend) <br>
		At stop street, turn left <br>
		Turn right onto paved road to Altydlig <br>
	</h4>
@endsection

@section('googleMap')
	<div style='overflow:hidden;height:440px;width:700px;'>
		<div id='gmap_canvas' style='height:440px;width:700px;'></div>
		<style>#gmap_canvas img{max-width:none!important;background:none!important;color:#000000}</style>
	</div>
@endsection

@section('pageSpecificScripts')
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
	<script type='text/javascript'>
		function init_map() {
			var myOptions = {zoom:15,center:new google.maps.LatLng(-33.9367184,18.7220282),mapTypeId: google.maps.MapTypeId.ROADMAP};
			map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
			marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-33.9367184,18.7220282)});
			infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>Altydlig Farm, Langverwacht Road, Stellenbosch Wine Route<br>'});
			google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
			infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
	</script>
@endsection