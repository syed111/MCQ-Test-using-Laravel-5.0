@extends('master')

@section('head')
@parent
@stop
@section('content')
<body style="background-color: #bdbdbd">
	<h1 style="text-align: center">Welcome To Online MCQ</h1>
	<br/>
	<div style="text-align: center">
		<img height="350px" width="1100px" src = "{{ ('image/online_mcq_2.png') }}"/>
	</div>
	<br/>
	<div style="text-align: center">

		<button onclick="location.href='http://localhost/MCQProject/public/login'" style="background-color: #eeeeee" class="btn btn-default" type="submit">Login</button>

		<button onclick="location.href='http://localhost/MCQProject/public/registration'" style="background-color: #eeeeee" class="btn btn-default" type="submit">Register</button>
	</div>
</body>
@stop