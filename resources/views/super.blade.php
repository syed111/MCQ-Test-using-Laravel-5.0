@extends('master')

@section('head')
@parent
@stop
@section('content')

<h1 style="text-align: center">Welcome Super Admin</h1>



@if(isset($subject))
{!! Form::model($subject,['method' => 'PATCH', 'action' => ['superAdminController@update', $subject->id]]) !!}

<!--{!! Form::model($subject,['method' => 'PATCH', 'action' => ['superAdminController@update', $subject->id]]) !!}-->

<input type="hidden" value="{{csrf_token()}}" name="_token">

<div class = "form-group">
	{!! Form::label('subject_name', 'Create Subject:') !!}
	{!! Form::text('subject_name', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">
	{!! Form::submit('Add Subject', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}

@else
{!! Form::open(['url' => 'super']) !!}
<input type="hidden" value="{{csrf_token()}}" name="_token">

<div class = "form-group">
	{!! Form::label('subject_name', 'Create Subject:') !!}
	{!! Form::text('subject_name', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">
	{!! Form::submit('Add Subject', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}

@endif

<div>
	<h3>Subject List</h3>

	@if(isset($subjects))
		@foreach( $subjects as $subject )

	{!! Form::open(['url' => 'super/'.$subject->id, 'method' => 'delete']) !!}
			<ul>
				<li> {{ $subject->subject_name}} <span><a href="{{URL::to('/super/'.$subject->id.'/super')}}">Edit</a> <a data-method="delete" href="{{URL::to('/super/'.$subject->id.'/delete')}}">Delete</a></span></li>
			</ul>
	{!! Form::close() !!}
	{!! Form::open(['url' => 'super/'.$subject->id, 'method' => 'delete']) !!}
	{!! Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
		@endforeach
	{!! Form::close() !!}
	@endif
</div>

<div>
	<span>
		<a href="http://localhost/MCQProject/public/questions" class="btn btn-link"> Go To Questions Page</a>
		<a href="http://localhost/MCQProject/public/questions/insert" class="btn btn-link"> Go To Question Insert Page</a>
		<a href="http://localhost/MCQProject/public/quiz" class="btn btn-link"> Go To Quiz Page</a>
	</span>
</div>

<div>
	<?php echo Session::get('type'); ?>
	<button onclick="location.href='http://localhost/MCQProject/public/logout'"  class="btn btn-default">Logout</button>
</div>
@stop