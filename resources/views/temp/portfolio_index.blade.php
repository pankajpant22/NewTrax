@extends('main')

@section('content')
<div id="top" class="jumbotron" data-src="/view/images/coffee_animation.gif" data-position="center center">
			<div class="container">
					<h1>Vinay Paramanand</h1>
					<p class="lead">Interactive Resume</p>
			</div>

			<div class="overlay"></div>

			<a href="#profile" class="scroll-down">
					<span class="glyphicon glyphicon-chevron-down"></span>
			</a>
</div>

<nav class="navbar navbar-default" id="navbar-example" role="navigation">
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
							<li class="active"><a href="#profile">Profile</a></li>
							<li><a href="#experiences">Experience</a></li>
							<li><a href="#abilities">Abilities</a></li>
							<li><a href="#projects">Projects</a></li>
							<li><a href="#volunteerings">Volunteer</a></li>
							<li><a href="#footer">Contact</a></li>
					</ul>
			</div>
			<!-- /.navbar-collapse -->
</nav>

<div class="background-white">
<div id="profile" class="container">
		<h2>Profile</h2>
		<hr />
		<div class="row">
				<div class="col-md-4">
						<h3>About me</h3>
						<p class="break_word_class">
							{{$portfolio->profile->about_me_text or "About Me Text"}}
						</p>
				</div>

				<div class="col-md-4 text-center">
						<img src="{{$portfolio->profile->image_path or 'Default URL'}}"
						alt="Vinay Paramanand" width="246" height="246"/>
				</div>
				<div class="col-md-4">
						<h3>Details</h3>
						<p>
								<strong>Name:</strong>{{$portfolio->profile->name or "Default Message"}}
								<br />
								<br />
								<strong>Email:</strong>{{$portfolio->profile->email or "Default email"}}
								<br />
                                                                <br />
								<strong>Phone:</strong>{{$portfolio->profile->phone or "Default Phone"}}
						</p>

						<script>
								! function(d, s, id) {
										var js, fjs = d.getElementsByTagName(s)[0],
												p = /^http:/.test(d.location) ? 'http' : 'https';
										if (!d.getElementById(id)) {
												js = d.createElement(s);
												js.id = id;
												js.src = p + '://platform.twitter.com/widgets.js';
												fjs.parentNode.insertBefore(js, fjs);
										}
								}(document, 'script', 'twitter-wjs');
						</script>
				</div>
		</div>
</div>
</div>

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

</div>

@endsection
