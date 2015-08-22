<!doctype html>
<html>


	<head>
		<script type="text/javascript" src="{{URL::asset('js/jquery-1.11.3.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
		<script>
			baseUrl ='<?php echo URL::to('/'); ?>';
		</script>

	</head>

	<body>
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}"/>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">MCQ</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Link</a></li>

				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
		<div class="container">
		@yield('content')


		<div style=" height: 60px">

		</div>
		</div>

	</body>

	<footer style="position: fixed ; bottom: 0px ; height: 60px ; margin-bottom: 0px ; width: 100% ;background-color: #CCCCCC">
		<br/>
		<div style="width: 20%">
		<p style="text-align: left ; margin-left: 20px"><i>Online MCQ</i></p>
		</div>

		<div style="width: 40%" id="footer-link">
			<a href="http://localhost/MCQProject/public/home"><p style="margin-top: -30px ; margin-left: 120px">Home</p></a>
			<a href="#"><p style="margin-top: -30px ; margin-left: 170px">About</p></a>
		</div>

		<div style="text-align: right ; margin-top: -35px ; margin-right: 20px">
			<a href="#"><img title="Facebook" src = "{{URL::asset('image/facebook.png')}}" width="35" height="35"/></a>
			<a href="#"><img title="Google+" src ="{{URL::asset('image/google+.png')}}" width="35" height="35"/></a>
		</div>

	</footer>
</html>