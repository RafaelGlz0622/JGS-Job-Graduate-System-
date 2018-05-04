@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/StarAdmin/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/StarAdmin/Chart.min.js"></script>
<script type="text/javascript" src="/js/StarAdmin/off-canvas.js"></script>
<script type="text/javascript" src="/js/StarAdmin/dashboard.js"></script>
<script type="text/javascript" src="/js/StarAdmin/misc.js"></script>

<body>
	<div class="container-scroller">
		<!-- partial:../../partials/_navbar.html -->
		
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:../../partials/_sidebar.html -->		
			<!-- partial -->
			<div class="main-panel">

				<div class="row">						
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Bar chart</h4>
								<canvas id="barChart"></canvas>
							</div>
						</div>
					</div>

				</div>
				
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script>
		let myChart = document.getElementById('barChart').getContext('2d');


		let massPopChart = new Chart(myChart, {
     	 type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
     	 data:{
     	 	labels:['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'],
     	 	datasets:[{
     	 		label:'Population',
     	 		data:[
     	 		617594,
     	 		181045,
     	 		153060,
     	 		106519,
     	 		105162,
     	 		95072
     	 		],
          //backgroundColor:'green',
          backgroundColor:[         
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
      }]
  },
  options:{ }
});

</script>
</body>

@endsection
