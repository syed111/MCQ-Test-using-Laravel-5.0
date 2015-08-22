@extends ('master')
@section ('head')
@parent
@stop
@section ('content')

<h1 style="text-align: center">Welcome To Online MCQ</h1>

<form style="text-align: center" method="post">
	<input type="hidden" value="{{csrf_token()}}" name="_token">

	<div class="form-group">
		<label for="exampleInputEmail1">Email</label>
		<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	</div>

	<button type="submit" class="btn btn-default">Login</button>

	@if(isset($msg))
	<p>{{$msg}}</p>
	@endif


</form>

@stop