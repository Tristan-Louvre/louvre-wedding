@extends('partials.featurette')

@section('title')
	Ceremony
@endsection

@section('first.image')
	{{ Html::image('/img/ceremony1.jpg', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('second.image')
	{{ Html::image('/img/ceremony3.jpg', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('third.image')
	{{ Html::image('/img/ceremony2.jpg', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection