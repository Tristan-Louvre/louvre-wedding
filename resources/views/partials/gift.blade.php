@extends('partials.featurette')

@section('pageSpecificFonts')
	<link href='https://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=IM+Fell+French+Canon:400italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:500italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
@endsection

@section('css')gift @endsection

@section('music')
	"/audio/Gifts.mp3"
@endsection

@section('title')
	Gifts & Cards
@endsection

@section('sub-title')
	“I'm blessed the day I found you” - Let It Be Me, Rosie Thomas.
@endsection

@section('first.image')
	{{ Html::image('/img/G&C1.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteOneText')
	<h2>Your presence alone is gift enough, but if you would like to bless us with something tangible, we have a special request in mind... What we would really love is some financial help towards investing in our first piece of property. Of course, anything would be greatly appreciated – from a single flower to a trip to New Zealand ;) </h2>
@endsection

@section('second.image')
	{{ Html::image('/img/G&C2.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteTwoText')
	<h2>If you do bring something in a box or with a bow, we ask that you bring it along to the Ceremony on Sunday.</h2>
@endsection

@section('third.image')
	{{ Html::image('/img/G&C3.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteThreeText')
	<h2>If you wish to contribute towards our Flat Fund the account details are:</h2>

	<h2>Please include your name as a reference and send a message to margueritebredell@gmail.com or bring a card to the wedding so that we know whom to thank.</h2>
@endsection