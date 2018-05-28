@extends('layouts.app')
@section('content')

<ul class="nav nav-tabs nav-justified" role="tablist">
	<li role="presentation" class="active"><a href="#nav-home" role="tab" data-toggle="tab">Vacantes Recientes</a></li>
	<li role="presentation"><a href="#nav-profile" role="tab" data-toggle="tab">Residencias</a></li>
	<li role="presentation"><a href="#nav-contact" role="tab" data-toggle="tab">Practicas Profesionales</a></li>
</ul>




@if (session('status'))
<div class="alert alert-success">
	{{ session('status') }}
</div>
@endif
<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade in active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
		<div class="" data-tabid="tab1">
			<br>
			<h2>Vacantes disponibles</h2>
			<br>
			@if(count($vacants) > 0)
			@foreach($vacants as $_vacant)
			<div class="well">
				<div class="card-body">
					<h5><a href="/{{$_vacant->id}}">{{$_vacant->title}}</a></h5>
					<small>Creado en {{$_vacant->addedDate}}</small>
					<br>		
					<small>{{$_vacant->salary}}</small>	
				</div>						

			</div>
			<br>
			@endforeach
			{{$vacants->links()}}
			@else
			<p>No posts found</p>

			@endif
		</div>
	</div>
	<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
		ESTO ES EL FUTURO VIEHO
	</div>
	<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

	</div>
</div>	





<br>





@endsection
