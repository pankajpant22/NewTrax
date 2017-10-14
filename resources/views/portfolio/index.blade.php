@extends('main')

@section('content')
<div id="top" class="jumbotron" data-src="/view/images/coffee_animation.gif" data-position="center center">
	<div class="background-white">
	<div id="profile" class="container">
			<h2 style="color: #22A39F;">Career Summary</h2>
			<hr style="margin:0px 0px 15px 0px;"/>
			<div class="row">
					<div class="col-md-12">
						<p class="break_word_class about_me_profile" style="font-size: 18px;color:black;text-align: justify;">
							{!! $portfolio->profile->about_me_text or "About Me Text" !!}
						</p>
					</div>
			</div>
	</div>
	</div>
			<a href="#experiences" class="scroll-down" id="portfolio-arrow-down">
					<span class="glyphicon glyphicon-chevron-down"></span>
			</a>
</div>

<nav class="navbar navbar-default portfolio-navbar" id="navbar-example" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
							<li class="active"><a href="#experiences">Experience</a></li>
							<li><a href="#abilities">Abilities</a></li>
							<li><a href="#projects">Projects</a></li>
							<li><a href="#volunteerings">Volunteer</a></li>
                            <li><a href="#resume">Resume</a></li>
                            <li id="contact_info"><a href="#">Contact</a></li>
					</ul>
			</div>
			<!-- /.navbar-collapse -->
</nav>


<div id="experiences" class="container">
		<h2>Experience</h2>
		<hr />
		<h3>Education</h3>
		<div class="experiences">
			@if($education != null)
				@foreach ($education as $edu)
				  	<div class="experience row">
								<div class="col-md-4 break_word_class">
										<h4>{{$edu->university }}</h4>
										<p class="experience-period">
												{{date('Y-m', strtotime($edu->from))}} <i>to</i> {{date('Y-m', strtotime($edu->to))}} </p>
								</div>
								<div class="col-md-8">
										<p style="text-align: justify;text-justify: inter-word;">
												<strong>{{$edu->course_title}}</strong>
												<span class="hidden-phone">
													{!! $edu->course_desc !!}
												<span class="experience-details">
													<span class="location">
															<span class="glyphicon glyphicon-link"></span><a href="{!! url($edu->university_url) !!}" target="_blank">{{$edu->university_url or "Dummy"}}</a></span>
												</span>
										</p>
								</div>
						</div>
					@endforeach
			@endif
		</div>
		<hr />

<h3>Career</h3>
<div class="experiences">
	@if($career != null)
			@foreach ($career as $car)
				<div class="experience row">
						<div class="col-md-4">
								<h4>{{$car->company or "Dummy"}}</h4>
								<p class="experience-period">
										{{date('Y-m', strtotime($car->from))}} <i>to</i> {{date('Y-m', strtotime($car->to))}} </p>
						</div>
						<div class="col-md-8">
								<p style="text-align: justify;text-justify: inter-word;">
										<strong>{{$car->designation or "Dummy"}}</strong>
										<span class="hidden-phone">
											{!! $car->responsibility or "Dummy" !!}
										<span class="experience-details">
										<span class="link">
										<span class="glyphicon glyphicon-link"></span>
										<a href="{!! url($car->company_url) !!}" target="_blank">{{$car->company_url or "Dummy"}}</a>
										</span>

										</span>
								</p>
						</div>
				</div>
			@endforeach
 	@endif
</div>
</div>

<div class="background-white">
<div id="abilities" class="container">
		<h2>Abilities</h2>
		<hr />

		<h3>Skills</h3>
		<div class="row">
			 @if($skills != null)
					@foreach($skills as $skill)
							<div class="col-md-6">
									<ul class="no-bullets">
											<li>
													<span class="ability-title">{{$skill->skill}}</span>
													<span class="ability-score">
														<?php $a = 1; $cond = true;?>
														@while($cond)
															<span class="glyphicon glyphicon-star filled"></span>
															@if ($a == $skill->stars)
																<?php $cond=false; ?>
															@endif
															<?php $a++; ?>
														@endwhile
													</span>
											</li>
									</ul>
							</div>
					@endforeach
			@endif
		</div>

		<hr />

		<h3>Languages</h3>

		<div class="row">
			@if($lang != null)
					@foreach($lang as $lan)
						<div class="col-md-6">
								<ul class="no-bullets">

										<li>
												<span class="ability-title">{{ $lan->lang}}</span>
												<span class="ability-score">
													<?php $a = 1; $cond = true;?>
													@while($cond)
														<span class="glyphicon glyphicon-star filled"></span>
														@if ($a == $lan->stars)
															<?php $cond=false; ?>
														@endif
														<?php $a++; ?>
													@endwhile
												</span>
										</li>
									</ul>
					</div>
				@endforeach
			@endif
		</div>

		<hr />

		<h3>Tools</h3>

		<div class="row">
			@if($tools != null)
				@foreach($tools as $tool)
					<div class="col-md-6">
							<ul class="no-bullets">

									<li>
											<span class="ability-title">{{$tool->tool}}</span>
											<span class="ability-score">
												<?php $a = 1; $cond = true;?>
												@while($cond)
													<span class="glyphicon glyphicon-star filled"></span>
													@if ($a == $tool->stars)
														<?php $cond=false; ?>
													@endif
													<?php $a++; ?>
												@endwhile
											</span>
									</li>
							</ul>
					</div>
				@endforeach
			@endif
		</div>
</div>
<div id="projects" class="container">
			<h2>Projects</h2>
			<hr />
				@if($projects != null)
						@foreach($projects as $proj)
						<div class="experience row">
								<div class="col-md-4">
										<h4>{{$proj->projectName or "Dummy"}}</h4>
								</div>
								<div class="col-md-8">
										<p style="text-align: justify;text-justify: inter-word;">
												<strong>{{$proj->title or "Dummy"}}</strong>
												<br/>
												<span class="hidden-phone">
													{!! $proj->description or "Dummy" !!}
												<br />
												<span class="experience-details">
												<span class="link">
												<span class="glyphicon glyphicon-link"></span>
												<a href="{!! url($proj->url) !!}" target="_blank">{{$proj->url or "Dummy"}}</a>
												</span>

												</span>
										</p>
								</div>
							</div>
						@endforeach
				@endif
		</div>


		<div id="volunteerings" class="container">
					<h2>Volunteer</h2>
					<hr />
						@if($volunteer != null)
								@foreach($volunteer as $volunt)
								<div class="row">
									<div class="col-md-4">
											<h4>{{$volunt->volunteerName or "Dummy"}}</h4>
									</div>
									<div class="col-md-8">
											<p style="text-align: justify;text-justify: inter-word;">
													<strong>{{$volunt->title or "Dummy"}}</strong>
													<br/>
													<span class="hidden-phone">
														{!! $volunt->description or "Dummy" !!}
													<br />
													<span class="experience-details">
													<span class="link">
													<span class="glyphicon glyphicon-link"></span>
													<a href="{!! url($volunt->url) !!}" target="_blank">{{$volunt->url or "Dummy"}}</a>
													</span>

													</span>
											</p>
									</div>

								</div>
								@endforeach
						@endif
				</div>

		<div id="resume" class="container">
					<h2>Resume</h2>
					<hr />
					<div class="row" style="margin: 0 auto;width: 50%;">
						<div class="col-md-6"><button class="btn btn-primary" id="single_resume">Single Page Resume</button></div>
						<div class="col-md-6"><button class="btn btn-info" id="full_resume" >Full Resume</button></div>
					</div>
		</div>	

	<!-- Modal -->
	<div id="full_R" style="left: 1549px; position: absolute; top: 1360px; z-index: 9999;
	 display: none; opacity: 1;">
	 	<span class="button b-close"><span>X</span></span>
        <object id="pdf_insert" data="img/vinay_full.pdf" type="application/pdf" 
			width="650" height="400">
    	</object>
    </div>

	<div id="single_R" style="left: 1549px; position: absolute; top: 1360px; z-index: 9999;
	 display: none; opacity: 1;">
        <span class="button b-close"><span>X</span></span>
        <object id="pdf_insert" data="img/vinay_single_page.pdf" type="application/pdf" 
			width="650" height="400">
    	</object>
    </div>
	<style>
		.b-close {
			float: right;
    		padding-right: 10px;
    		color: white;
			padding-left: 10px;
			cursor:pointer;
		}
	</style>			
</div>
@endsection
