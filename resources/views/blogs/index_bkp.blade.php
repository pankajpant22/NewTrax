@extends('main')

@section('content')
	<div class="container blog-container">
		<script src="/js/jquery-latest.min.js" type="text/javascript"></script>

			<div class="content">
					@if (!empty($result))
								<div class="accordion">
									@foreach($result as $key=>$res)
											<div class="accordion-section" style="margin-bottom:10px;">
													<a class="accordion-section-title" href="#accordion-1-{{$key}}"><h4>{{$res['title']}}</h4></a>

													<div id="accordion-1-{{$key}}" class="accordion-section-content" style="text-align: justify;text-justify: inter-word;">
														<p>
															{!! $res['desc'] !!}
														</p>
													</div><!--end .accordion-section-content-->
											</div><!--end .accordion-section-->
									@endforeach
								</div><!--end .accordion-->



						<style media="screen">
						/*----- Accordion -----*/
									.accordion, .accordion * {
										-webkit-box-sizing:border-box;
										-moz-box-sizing:border-box;
										box-sizing:border-box;
									}

									.accordion {
										overflow:hidden;
										box-shadow:0px 1px 3px rgba(0,0,0,0.25);
										border-radius:3px;
										background:#f7f7f7;
									}

									/*----- Section Titles -----*/
									.accordion-section-title {
										width:100%;
										padding:15px;
										display:inline-block;
										border-bottom:1px solid #1a1a1a;
										background:#333;
										transition:all linear 0.15s;
										/* Type */
										font-size:1.200em;
										text-shadow:0px 1px 0px #1a1a1a;
										color:#fff;
									}

									.accordion-section-title.active, .accordion-section-title:hover {
										background:#4c4c4c;
										/* Type */
										text-decoration:none;
									}

									.accordion-section:last-child .accordion-section-title {
										border-bottom:none;
									}

									/*----- Section Content -----*/
									.accordion-section-content {
										padding:15px;
										display:none;
									}
						</style>

						<script type="text/javascript">
						function close_accordion_section() {
								$('.accordion .accordion-section-title').removeClass('active');
								$('.accordion .accordion-section-content').slideUp(300).removeClass('open');
						}

						$('.accordion-section-title').click(function(e) {
								// Grab current anchor value
								var currentAttrValue = $(this).attr('href');
								if($(e.target).is('.active')) {
										close_accordion_section();
								}else {
										close_accordion_section();

										// Add active class to section title
										$(this).addClass('active');
										// Open up the hidden content panel
										$('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
								}

								e.preventDefault();
						});
						</script>

					@else
						<div class="starting_text" style="text-align: justify;text-justify: inter-word;">
							<h3>Canada</h3>
								<p>
								The world’s second-largest country by size (9.985 sq. million km),
								and the worlds tenth largest economy, Canada is home to immigrants
								and can be described as a “home away from home”.
								A federation, Canada is home to 10 provinces and 3 territories.
								Canada is grouped into four regions: Western Canada, Northern Canada,
								Atlantic Canada and Northern Canada.  The country has six time zones,
								two official languages, is 150 years old and has over 60 indigenous languages.
								A truly amazing country!
								</p>

						</div>




							<div class="row text-center">
								<h3 style="color:blueviolet;">Choose to Explore</h3>
							</div>
								<form class="form-horizontal" method="POST">
								<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
								{{ csrf_field() }}

								<div class="form-group">
											<div class="col-xs-4">
												<label for="exampleSelect1">I am a</label>
											</div>
											<div class="col-xs-8">
												<select class="form-control" id="profile" name="reason">
													<option value="tag_Student">Student</option>
													<option value="tag_Work">Worker</option>
												</select>
												<input type="hidden" name="profile_name_student" id="profile_name_student" value="true"/>
											</div>
										</div>
										<div class="form-group">
											<div class="col-xs-4">
												<label for="exampleSelect1" >I am</label>
											</div>
											<div class="col-xs-8">
												<select class="form-control" id="exampleSelect1" name="marital">
													<option value="tag_StudentSingle">Single</option>
													<option value="tag_Married">Married</option>
													<option value="tag_MarriedKids">Married with Kids</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-xs-4">
												<label for="exampleSelect1" >Destination City</label>
											</div>
											<div class="col-xs-8">
												<select class="form-control" id="exampleSelect1" name="city">
													<option value="tag_Montreal">Montreal</option>
												</select>
											</div>
										</div>
										<div class="form-group" id="university">
											<div class="col-xs-4">
												<label for="exampleSelect1" >Institution of Study</label>
											</div>
											<div class="col-xs-8">
												<select class="form-control" id="exampleSelect1" name="university">
													<option value="tag_Concordia">Concordia University</option>
													<option value="tag_McGill">McGill University</option>
												</select>
											</div>
										</div>

										<button type="submit" class="btn btn-primary">Submit</button>
								</form>
								<script>
											$("#profile").change(function() {
												var selected_option = $('#profile').val();
												if (selected_option == 'tag_Student') {
													$('#university').show();
													$('#profile_name_student').val("true");
												}else {
													$('#university').hide();
													$('#profile_name_student').val("false");
												}
											});
								</script>

					@endif
			</div>
	</div>
@endsection
