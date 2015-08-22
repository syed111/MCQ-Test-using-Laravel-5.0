@extends('master')

@section('head')
@parent
@stop
@section('content')
<h1 style="text-align: center">Add Questions</h1>

<div>
	<span>
		<a href="http://localhost/MCQProject/public/questions" class="btn btn-link"> Go To Questions Page</a>
		<a href="http://localhost/MCQProject/public/questions/insert" class="btn btn-link"> Go To Question Insert Page</a>
	</span>
</div>

<hr/>


{!! Form::model($question,['method' => 'PATCH', 'action' => ['QuestionController@update', $question->id]]) !!}



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

<div class = "form-group">
	{!! Form::submit('Add Question', ['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}
@stop