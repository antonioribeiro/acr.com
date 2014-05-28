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
		<div class="col-lg-10 col-md-offset-1">
			<div class="table-responsive">

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>IP address</th>
							<th>User</th>
							<th>Device</th>
							<th>Browser</th>
							<th>Hits</th>
							<th>Last activity</th>
						</tr>
					</thead>

					<tbody>
						@foreach($sessions as $session)
							<tr>
								<td>{{ $session->id }}</td>
								<td>{{ $session->client_ip }}</td>
								<td>{{ $session->user ? $session->user->email : 'guest' }}</td>
								<td>{{ $session->device ? $session->device->kind . ' ( '.($session->device->model && $session->device->model !== 'unavailable' ? $session->device->model : '').' '.($session->device->platform ? ' '.$session->device->platform : '').' '.($session->device->is_mobile ? ' mobile device' : '').' )' : '' }}</td>
								<td>{{ $session->device && $session->device->agent ? $session->device->agent->browser . ' ('.$session->device->agent->browser_version.')' : '' }}</td>
								<td>{{ $session->hits }}</td>
								<td>{{ $session->updated_at->diffForHumans() }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@stop