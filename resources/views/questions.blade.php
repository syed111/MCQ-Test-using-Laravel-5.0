@extends('master')

@section('head')
@parent
@stop
@section('content')
<h1 style="text-align: center">Questions</h1>
<div>
	<span>
		<a href="http://localhost/MCQProject/public/questions/insert" class="btn btn-link"> Go To Question Insert Page</a>
	</span>
</div>
<hr/>

@foreach($questions as $question)
{!! Form::open(['url' => 'questions/'.$question->id, 'method' => 'delete']) !!}

<input type="hidden" value="{{csrf_token()}}" name="_token">
	<h3>Question</h3>
	<p style="padding-left: 20px">{{ $question->q_description }}</p> <a href="{{URL::to('/questions/'.$question->id.'/edit')}}">Edit</a>
	

	<h4>Option</h4>
		<ol>
		<li style="padding-left: 5px">{{ $question->q_opt_1 }}</li>
		<li style="padding-left: 5px">{{ $question->q_opt_2 }}</li>
		<li style="padding-left: 5px">{{ $question->q_opt_3 }}</li>
		<li style="padding-left: 5px">{{ $question->q_opt_4 }}</li>
		</ol>
<div class="from-group">
	{!! Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
</div>
{!! Form::close() !!}
@endforeach
@if(Session::has('id'))
<div>
	<?php echo Session::get('type'); ?>
<button onclick="location.href='http://localhost/MCQProject/public/logout'"  class="btn btn-default">Logout</button>

</div>
@endif
@stop
