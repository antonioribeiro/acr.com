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

			{{ Form::open(['route' => 'admin.tracker.index']) }}
				{{ Form::label('Hours') }}
				{{ Form::text('hours', Input::get('hours') ?: 24) }}
			{{ Form::close() }}

			<div class="table-responsive">

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>IP address</th>
							<th>Country / City</th>
							<th>User</th>
							<th>Device</th>
							<th>Browser</th>
							<th>Referer</th>
							<th>Hits</th>
							<th>Last activity</th>
						</tr>
					</thead>

					<tbody>
						@foreach($sessions as $session)
							<?php
								$cityName = $session->geoip && $session->geoip->city ? ' - '.$session->geoip->city : '';
								$countryName = ($session->geoip ? $session->geoip->country_name : '') . $cityName;
								$countryCode = strtolower($session->geoip ? $session->geoip->country_code : '');

								$flag = $countryCode
										? "<img src=\"\" class=\"flag flag-$countryCode\" alt=\"$countryName\" />"
										: '';
							?>

							<tr>
								<td>{{ link_to_route('admin.tracker.log', $session->id, ['uuid' => $session->uuid]) }}</td>
								<td>{{ $session->client_ip }}</td>
								<td>{{ $flag }} {{ $countryName }}</td>
								<td>{{ $session->user ? $session->user->email : 'guest' }}</td>
								<td>{{ $session->device ? $session->device->kind . ' ' . ($session->device->model && $session->device->model !== 'unavailable' ? '['.$session->device->model.']' : '').' '.($session->device->platform ? ' ['.trim($session->device->platform.' '.$session->device->platform_version).']' : '').' '.($session->device->is_mobile ? ' [mobile device]' : '') : '' }}</td>
								<td>{{ $session->agent && $session->agent ? $session->agent->browser . ' ('.$session->agent->browser_version.')' : '' }}</td>
								<td>{{ $session->referer ? $session->referer->domain->name : '' }}</td>
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
