@extends('partials.featurette')

@section('title')
	Celebration
@endsection

@section('first.image')
	{{ Html::image('/img/colourbox3.jpg', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('second.image')
	{{ Html::image('/img/colourbox1.jpg', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('third.image')
	{{ Html::image('/img/colourbox2.jpg', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection
