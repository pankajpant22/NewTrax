@extends('main')

@section('content')
	<div class="container" style="min-height:450px;">
			<div class="content">
				Opening Blogs  in 5 seconds  <br/>
				* Note: If popup is blocked click to open :
				<a href="{!! url($url) !!}" target="_blank">Blogs</a>
			</div>
			<script src="/js/jquery-latest.min.js" type="text/javascript"></script>
			<script>
			$(document).ready(function () {
					setTimeout(function () {
						window.open("{{ $url }}","_blank");
						// window.location.href = "{{ $url }}"
					}, 5000);
					});
			</script>
	</div>
@endsection
