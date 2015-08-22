@extends('master')

@section('head')
@parent
@stop
@section('content')
<h1 style="text-align: center">Quiz</h1>

<hr/>


<form style="margin-left: 10px" method="post" action="{{URL::to('/quiz')}}">
	<input type="hidden" value="{{csrf_token()}}" name="_token">
@foreach($quiz as $question)
	<h3>Question</h3>
	<p style="padding-left: 20px">{{ $question->q_description }}</p>
	<p><strong>Options</strong></p>
	<!--<form>
		<input type="checkbox" name="q_opt_1" />
	</form>-->
	<!--{!! Form::checkbox('key' , 'V') !!} "{{ $question->q_opt_1 }}"-->

		<input type="radio" name='q-{{$question->id}}' value="1" > {{ $question->q_opt_1 }} </input>
		<input type="radio" name="q-{{$question->id}}" value="2"  style="margin-left: 20px"> {{ $question->q_opt_2 }} </input>
		<input type="radio" name="q-{{$question->id}}" value="3"  style="margin-left: 20px"> {{ $question->q_opt_3 }} </input>
		<input type="radio" name="q-{{$question->id}}" value="4"  style="margin-left: 20px"> {{ $question->q_opt_4 }} </input>



@endforeach
<div class = "form-group">
	{!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
</div>

</form>
@if(Session::has('id'))
<div>
	<?php echo Session::get('type'); ?>
	<button onclick="location.href='http://localhost/MCQProject/public/logout'"  class="btn btn-default">Logout</button>
</div>
@endif
@stop