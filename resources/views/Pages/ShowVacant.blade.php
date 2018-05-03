@extends('layouts.app')
@section('content')
<h1>{{$vacant->title}}</h1>
<small>Añadido en {{$vacant->addedDate}}</small>
<div>
	{!!$vacant->body!!}
	
</div>
@endsection