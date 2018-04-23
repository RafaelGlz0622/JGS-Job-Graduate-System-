@extends('layouts.app')
@section('content')

<style type="text/css">


</style>

<br>
<div class="container">
	<nav>
		<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Vacantes Recientes</a>
			<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
			<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
		</div>
	</nav>
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			<div class="" data-tabid="tab1">
				<ul>
					<li class="list-group-item" data-id="96202">
						<div>
							<a class="" href=""><span class="">Graduate Journalist</span></a>
							<span class="">new</span>
							<a class="job-list__fav" data-id="96202" href="#">								
							</a>
						</div>
						<div class="">
							<p class="">£18000.00  to  £24000.00 per annum</p>

							<p class="job-list__company">
								<span>Aspire</span>
							</p>

							<p class="job-list__location">
								<span class="job-list__location-text">
									<a class="job-list__loc" href="/jobs/london">London</a></span>
								</p>
							</div>

							<div class="job-list__logo"><img src="/img/logo/69-mb.gif" alt="Aspire"></div>
						</li>
						<li class="job-list__item " data-id="95266">
							<div>
								<a class="job-list__link" href="/job/graduate-management-trainee-bournemouth-95266"><span class="job-list__title job-list__title--new">Graduate Management Trainee - Bournemouth</span></a>
								<span class="job-list__new">new</span><a class="job-list__fav" data-id="95266" href="#"></a>
							</div>

							<div class="job-list__info">
								<p class="job-list__salary">competitive</p>

								<p class="job-list__company">
									<span class="job-list__rank">2</span><span>Enterprise Rent-A-Car</span>
								</p>

								<p class="job-list__location">
									<span class="job-list__location-text">
									South West, Bournemouth</span>
								</p>
							</div>

							<div class="job-list__logo"><img src="/img/Enterprise_graduate-jobs_0809_90x35.gif" alt="Enterprise Rent-A-Car"></div>
						</li>
						<li class="job-list__item " data-id="96525">
							<div>
								<a class="job-list__link" href="/job/covert-technical-operations-specialists-mi5-96525"><span class="job-list__title job-list__title--new">Covert Technical Operations Specialists - MI5</span></a>
								<span class="job-list__new">new</span><a class="job-list__fav" data-id="96525" href="#"></a>
							</div>

							<div class="job-list__info">
								<p class="job-list__salary">£33,783 to £43,097 depending on skills and experience</p>

								<p class="job-list__company">
									<span>MI5</span>
								</p>

								<p class="job-list__location">
									<span class="job-list__location-text">
										<a class="job-list__loc" href="/jobs/london">London</a>
									</span>
								</p>
							</div>

							<div class="job-list__logo"><img src="/img/MI5_graduate-jobs_90x35.gif" alt="MI5">
							</div>
						</li>
						<li class="job-list__item " data-id="96990">
							<div>
								<a class="job-list__link" href="/job/graduate-sales-executive-glasgow-96990"><span class="job-list__title ">Graduate Sales Executive - Glasgow</span></a>
								<a class="job-list__fav" data-id="96990" href="#"></a>
							</div>

							<div class="job-list__info">
								<p class="job-list__salary">Competitive + benefits</p>

								<p class="job-list__company">
									<span>Softcat PLC (2018)</span>
								</p>

								<p class="job-list__location">
									<span class="job-list__location-text">
									Scotland, Glasgow</span>
								</p>
							</div>

							<div class="job-list__logo"><img src="/img/logo/2977-mb.gif" alt="Softcat PLC (2018)">
							</div>
						</li>
					</li>
				</ul>
				<div>
					<a class="btn btn__viewAll homepage-tab__btn" data-ga-on="click" data-ga-event-category="Homepage" data-ga-event-action="Button" data-ga-event-label="LatestJobs" href="/jobs/">
					Graduate Jobs</a>
					<a class="btn btn__viewAll homepage-tab__btn" data-ga-on="click" data-ga-event-category="Homepage" data-ga-event-action="Button" data-ga-event-label="LatestInternships" href="/internships/">Internships</a>
				</div>
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
