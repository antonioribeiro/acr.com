@extends('admin.layout')

@section('pageHeader')
	<div class="row">
		<div class="col-lg-12">
		<h1>Tracker</h1>
		</div>
	</div>
@stop

@section('content')
	<div class="row">
		<div class="col-lg-12">
			@include('admin.tracker._partials.menu')

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-sun-o"></i> {{$title}}</h3>
						</div>
						<div class="panel-body">
							@yield('tracker.main.content')
						</div>
					</div>
				</div>
			</div><!-- /.row -->
		</div>
	</div>

	@yield('tracker.secondary.content')
@stop
