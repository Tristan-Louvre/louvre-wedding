@extends('partials.featurette')

@section('title')
	RSVP
@endsection

@section('first.image')
	{{ Html::image('/img/RSVP2.jpg', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('second.image')
	{{ Html::image('/img/RSVP1.jpg', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('third.image')
	{{ Html::image('/img/RSVP3.jpg', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection