<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Learn more about this -->
		<title>Byron and Marguerite's Wedding Website</title>

		<!-- Bootstrap CSS -->
		<link href="/css/app.css" rel="stylesheet">
		<link href="/css/main.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>



	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="wedding">Ceremony</a></li>
					<li><a href="celebration">Celebration</a></li>
					<li><a href="reply">RSVP</a></li>
					<li><a href="gifts">Gifts</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<!-- Marketing messaging and featurettes
    ================================================== -->
	<!-- Wrap the rest of the page in another container to center all the content. -->

	<div class="container marketing">

		<!-- START THE FEATURETTES -->
		<h1 class="page-header">@yield('content')</h1>

		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			</div>
			<div class="col-md-5">
				{{ Html::image('/img/Placeholder.jpg', 'Generic placeholder image 11', array('class' => "featurette-image img-responsive center-block")) }}
			</div>
		</div>

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-7 col-md-push-5">
				<h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			</div>
			<div class="col-md-5 col-md-pull-7">
				{{ Html::image('/img/Placeholder.jpg', 'Generic placeholder image 11', array('class' => "featurette-image img-responsive center-block")) }}
			</div>
		</div>

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
				<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
			</div>
			<div class="col-md-5">
				{{ Html::image('/img/Placeholder.jpg', 'Generic placeholder image 11', array('class' => "featurette-image img-responsive center-block")) }}
			</div>
		</div>

		<hr class="featurette-divider">

		<!-- /END THE FEATURETTES -->

	</div><!-- /.container -->



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		{{--<script src="../../dist/js/bootstrap.min.js"></script>--}}
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

			<!-- jQuery -->
			<!--<script src="//code.jquery.com/jquery.js"></script>-->
			<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>





