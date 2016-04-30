@extends('partials.featuretteAlt')

@section('pageSpecificFonts')
	<link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:500italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=IM+Fell+French+Canon:400italic' rel='stylesheet' type='text/css'>
@endsection

@section('css')reply @endsection

@section('music')
	"/audio/RSVP.mp3"
@endsection

@section('title')
	R.S.V.P.
@endsection

@section('sub-title')
	“You know I got a lot of love inside me” - I Want To Protect You, The Eels.
@endsection

@section('first.image')
	{{ Html::image('/img/RSVP2.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteOneText')
	<h1>We are looking forward to celebrating with you!</h1>
	<h2>If you haven't yet done so kindly respond before 31st of May, 2016.</h2>
	<h3>Please also inform us of any special details regarding your attendance eg. only joining us for one of the two days, dietary restrictions or anything else you feel we would need to know to help you fully enjoy your time with us.</h3>
@endsection

@section('second.image')
	{{ Html::image('/img/RSVP1.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteFormText')
	<form action="reply" method="post">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<div class="row control-group">
			<div class="form-group col-xs-12">
				<label for="fullName">Full Name: </label>
				<input type="text" class="form-control" id="fullName" name="fullName" maxlength="45" placeholder="Fill me in...">
			</div>
		</div>
		<div class="row control-group">
			<div class="form-group col-xs-12 attendanceLabel">
				<label for="attendance">Attendance: </label>
			</div>
		</div>
		<div class="row control-group">
			<div class="form-group col-xs-12 attendanceRadio">
				<label class="radio-inline">
					<input type="radio" name="attendance" value="Celebration">Celebration
				</label>
				<label class="radio-inline">
					<input type="radio" name="attendance" value="Ceremony">Ceremony
				</label>
				<label class="radio-inline">
					<input type="radio" name="attendance" value="Both" checked="checked">Both
				</label>
				<label class="radio-inline">
					<input type="radio" name="attendance" value="Neither">Neither
				</label>
			</div>
		</div>
		<div class="row control-group">
			<div class="form-group col-xs-12 controls">
				<label for="comment">Comments: </label>
              <textarea rows="5" class="form-control" id="comment" name="comment" maxlength="510" placeholder="Type here..."></textarea>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="form-group col-xs-12 col-xs-offset-10">
				<button type="submit" class="btn btn-lg btn-default">Send</button>
			</div>
		</div>
	</form>
@endsection

@section('third.image')
	{{ Html::image('/img/RSVP3.png', 'Generic placeholder image', array('class' => "featurette-image img-responsive center-block")) }}
@endsection

@section('featuretteThreeText')

@endsection