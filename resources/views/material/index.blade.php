@extends('main')

@section('content')
	<div class="content">
		<div style="margin: 50px 50px 50px 50px;">
			<div style="width:300px; margin:0 auto;">
				<h3>Links to Resources </h3>
			</div>
			@foreach($material as $res)
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">{{ $res->title }}</h3>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled">
							@foreach($res->links as $link)
								<li>{!! $link->url or "Dummy" !!}</li>
							@endforeach
						</ul>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
