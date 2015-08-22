@extends('master')

@section('head')
@parent
@stop
@section('content')
	<br/>
	<br/>
	<br/>
	<h2 style="text-align: center">Congratulations!!</h2>
	<br/>
	<h2 style="text-align: center">Total Number of Question {{ $result->total_marks }}</h2>
	<br/>
	<h2 style="text-align: center">Unanswered Question {{ $result->unanswered }}</h2>
	<br/>
	<h2 style="text-align: center">You have got {{  $result->marks }} out of {{ $result->total_marks }}</h2>

<button onclick="location.href='http://localhost/MCQProject/public/logout'"  class="btn btn-default">Logout</button>
<!--
@if(session('loggedIn'))
<div>

	<button onclick="location.href='http://localhost/MCQProject/public/logout'"  class="btn btn-default">Logout</button>
</div>
@endif
-->
@stop