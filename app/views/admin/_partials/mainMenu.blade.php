@if(Auth::check())
	<div class="collapse navbar-collapse navbar-ex1-collapse pagination-centered">
		<ul class="nav navbar-nav side-nav">
			<li><a href="{{ URL::route('admin.index') }}"><i class="fa fa-dashboard"></i> Languages</a></li>
			<li><a href="{{ URL::route('admin.index') }}"><i class="fa fa-bar-chart-o"></i> Statistics</a></li>
			<li><a href="{{ URL::route('admin.index') }}"><i class="fa fa-table"></i> Translate</a></li>
			<li><a href="{{ URL::route('logout.do') }}"><i class="fa fa-table"></i> Logout</a></li>
		</ul>
	</div>
@endif