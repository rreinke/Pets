@extends('master')

@section('header')
	<a href="{{url('/')}}">Back to pet list</a>
	<h2>
		{{{$pet->name}}}
	</h2>
@stop

@section('content')
	<p>{{$pet->pettype->name}}</p>
	<p>Age: {{$pet->age}}</p>
@stop