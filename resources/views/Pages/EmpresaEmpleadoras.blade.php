@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-md-12">
		<h1 style="text-align: center; font-style: ">Manufactura</h1>
	</div>	
</div>

<br>
<div class="row">
	<div class="col-md-4">	
		<div class="card" style="width: 18rem;">
			<img src="{{ asset('img/Albea-invests-in-new-Argonne-factory_wrbm_large.jpg') }}" class="img-fluid">
			<div class="card-body">
				<h5 class="card-title">Albea servicios de mexico S.A De C.V</h5>
			</div>
		</div>
	</div>	

	<div class="col-md-4">

		<div class="card" style="width: 18rem;">
			<img src="{{ asset('img/Robertshaw logo stand virtual.jpg') }}" class="img-fluid">
			<div class="card-body">
				<h5 class="card-title">Robertshaw Controles Latinoamericanos S. De R.L de C.V.</h5>				
			</div>
		</div>
	</div>



	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
			<img src="{{ asset('img/ddr2-2gb-memoria-D_NQ_NP_813911-MLA20673008687_042016-F.jpg')}}" class="img-fluid">
			<div class="card-body">
				<h5 class="card-title">Avant Manufacturing De Mexico S. De R.L. De C.V</h5>
			</div>
		</div>
	</div>

	
	
</div>
<br>
<br>
<div class="row">
	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
			<img src="{{ asset('img/Parker.jpg')}}" class="img-fluid">
			<div class="card-body">
				<h5 class="card-title">Robertshaw Controles Latinoamericanos S de RL de CV.</h5>
			</div>
		</div>
	</div>


	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
			<img src="{{ asset('img/Trico.jpg')}}" class="img-fluid">
			<div class="card-body">
				<h5 class="card-title">Trico Componentes S.A. de C.V Matamoros</h5>
			</div>
		</div>
	</div>


	<div class="col-md-4">
		<div class="card" style="width: 18rem;">
			<img src="{{ asset('img/Tapex.jpg')}}" class="img-fluid">
			<div class="card-body">
				<h5 class="card-title">Trico Componentes S.A. de C.V Matamoros</h5>
			</div>
		</div>
	</div>

</div>	


@endsection