@extends('layouts.app')
@section('content')

<style type="text/css">


</style>

<br>
<div class="container">
	<nav>
		<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Vacantes Recientes</a>
			<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Residencias</a>
			<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Practicas Profesionales</a>
		</div>
	</nav>
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			<div class="" data-tabid="tab1">
				<h2>Vacantes disponibles</h2>
				<br>
				@if(count($vacants) > 0)
				@foreach($vacants as $_vacant)
				<div class="card">
					<div class="card-body">
						<h5><a href="/{{$_vacant->id}}">{{$_vacant->title}}</a></h5>
						<small>Creado en {{$_vacant->addedDate}}</small>	
					</div>						

				</div>
				<br>
				@endforeach
				@else
				<p>No posts found</p>

				@endif
			</div>
		</div>
		<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			ESTO ES EL FUTURO VIEHO
		</div>
		<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
			SEXO
		</div>
	</div>		
</div>
<br>





@endsection
