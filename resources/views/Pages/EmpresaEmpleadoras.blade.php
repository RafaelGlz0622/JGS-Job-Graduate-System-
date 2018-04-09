@extends('layouts.app')
@section('content')
<style type="text/css">
#empresa1, #empresa2{
	background-color: #DADBFC
}
</style>
<div class="col-md-12">

		<div class="card col-md-2" id="empresa1">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="#" class="btn btn-primary">Button</a>
			</div>
		</div>	
		

		<div class="card col-4" id="empresa2">
			<div class="card-body">
				<h5 class="card-title">Special title treatment</h5>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
</div>


@endsection