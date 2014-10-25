@extends('master')

@section('header')
<h2>
	List of Pets
</h2>
@stop

@section('content')
	@foreach($pets as $pet)
	<div class="pet">
		<a href="{{URL::to('pets/'.$pet->id)}}">
			<strong> {{$pet->name}} </strong> - {{$pet->age}} - {{$pet->pettype->name}}
		</a>
	</div>
	@endforeach
	<div class="number-pets">
		{{"<br>"}}There are currently {{$pets->count()}} pets on this site! Find a friend!
	</div>

	<p>{{"<br>"}}Now for some Eloquent ORM practice</p>
	<ul>
		<li><a href="{{URL::to('pets')}}">Show all pets</a></li>
		<li><a href="{{URL::to('pets/pettype/dogs')}}">Show only dogs</a></li>
		<li><a href="{{URL::to('pets/ordered')}}">Order by age</a></li>
	</ul>
@stop
