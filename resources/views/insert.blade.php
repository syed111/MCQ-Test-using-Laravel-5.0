@extends('master')

@section('head')
@parent
@stop
@section('content')


<h1 style="text-align: center">Add Questions</h1>
<div>
	<span>
		<a href="http://localhost/MCQProject/public/questions" class="btn btn-link"> Go To Questions Page</a>
	</span>
</div>
<hr/>

<input type="hidden" value="{{csrf_token()}}" name="_token" id="token">

<!--<form action="insertJS.blade.php" method="post" class="ajax">-->

<div class = "form-group" id="subject">
	{!! Form::label('subject', 'Choose Subject:') !!}
	<!-- {!! Form::select ('subject_s', $sub) !!} -->
<!--	@if($i = 0)
		@foreach($sub as $ss)
			{!! Form::select ('subject_s',
					[ '$i++' => '$ss' ]) !!}
		@endforeach
	@endif -->
	<?php
		echo "<select id='subject_s' name='subject_s'>";
		$i = 0;
		foreach($sub as $ss) {
			echo "<option value='".$i++."'>".$ss."</option>";
		}
		echo "</select>";
	?>
</div>

<div class = "form-group">
	{!! Form::label('q_description', 'Question:') !!}
	{!! Form::textarea('q_description', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">
	{!! Form::label('q_opt_1', 'Option 1:') !!}
	{!! Form::text('q_opt_1', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">
	{!! Form::label('q_opt_2', 'Option 2:') !!}
	{!! Form::text('q_opt_2', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">
	{!! Form::label('q_opt_3', 'Option 3:') !!}
	{!! Form::text('q_opt_3', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">
	{!! Form::label('q_opt_4', 'Option 4:') !!}
	{!! Form::text('q_opt_4', null, ['class' => 'form-control']) !!}
</div>

<div class = "form-group">
	{!! Form::label('q_ans', 'Answer:') !!}
	{!! Form::select('q_ans' ,
		[ '1' => 'Option 1' ,
		  '2' => 'Option 2' ,
		  '3' => 'Option 3' ,
		  '4' => 'Option 4' ] ) !!}
</div>
<!-- document.getElementById('subject_s').options[document.getElementById('subject_s').selectedIndex].text -->
<div class = "form-group">
	{!! Form::button('Add Question', ['class' => 'btn btn-primary form-control', 'id' => 'btn-insert']) !!}
</div>


<button onclick="location.href='http://localhost/MCQProject/public/logout'"  class="btn btn-default">Logout</button>
@stop
