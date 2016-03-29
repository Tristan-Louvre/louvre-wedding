@extends('partials.featurette')

@section('title')
	Gifts
@endsection

@section('first.image')
	{{ Html::image('/img/G&C1.jpg', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('second.image')
	{{ Html::image('/img/G&C2.jpg', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('third.image')
	{{ Html::image('/img/G&C3.jpg', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection