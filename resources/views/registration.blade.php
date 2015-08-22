@extends ('master')
@section ('head')
@parent
@stop
@section ('content')

<h1 style="text-align: center">Registration</h1>

<form style="text-align: center" method="post">
	<input type="hidden" value="{{csrf_token()}}" name="_token">

	<div class="form-group">
		<label for="exampleInputEmail1">Email</label>
		<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
	</div>
	<div style="margin-left: -23" class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	</div>
	<div style="margin-left: -23" class="form-group">
		<label for="exampleInputPassword1">Address</label>
		<input type="address" name="address" class="form-control" id="exampleInputPassword1" placeholder="Address">
	</div>
	@if($type === "SuperAdmin" || $type=== "Admin")
	<div style="margin-left: -23" class="form-group">
		<label for="exampleInputPassword1">Address</label>
		<select name="type" id="">
			<option value="SuperAdmin">SuperAdmin</option>
			<option value="Admin">Admin</option>
			<option value="Student">Student</option>
		</select>
	</div>
	@endif
	<button type="submit" class="btn btn-default">Sign in</button>

</form>

@stop
