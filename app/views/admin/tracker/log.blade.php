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
							<th>Method</th>
							<th>Route Name / Action</th>
							<th>Route</th>
							<th>Query</th>
							<th>Is ajax?</th>
							<th>Is secure?</th>
							<th>Is json?</th>
							<th>Wants Json?</th>
							<th>Error?</th>
						</tr>
					</thead>

					<tbody>
						@foreach($log as $entry)
							<?php
								$query = null;

								if ($entry->logQuery)
								{
									foreach($entry->logQuery->arguments as $argument)
									{
										$query .= ($query ? '<br>' : '') . $argument->argument . '=' . $argument->value;
									}
								}

								$route = null;

								if ($entry->routePath)
								{
									foreach($entry->routePath->parameters as $parameter)
									{
										$route .= ($route ? '<br>' : '') . $parameter->parameter . '=' . $parameter->value;
									}
								}
							?>

							<tr>
								<td>{{ $entry->method }}</td>
								<td>{{ $entry->routePath ? $entry->routePath->route->name . '<br>' . $entry->routePath->route->action : $entry->path->path }}</td>
								<td>{{ $route }}</td>
								<td>{{ $query }}</td>
								<td>{{ $entry->is_ajax ? 'true' : '' }}</td>
								<td>{{ $entry->is_secure ? 'true' : '' }}</td>
								<td>{{ $entry->is_json ? 'true' : '' }}</td>
								<td>{{ $entry->wants_json ? 'true' : '' }}</td>
								<td>{{ $entry->error ? 'true' : '' }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@stop