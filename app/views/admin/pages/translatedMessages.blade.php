@extends('admin.layout')

@section('pageHeader')
	<div class="row">
		<div class="col-lg-12">
		<h1>Language Statistics</h1>
			<ol class="breadcrumb">
				<li><a href="index.html"><i class="icon-dashboard"></i> Languages</a></li>
				<li><a href="index.html"><i class="icon-dashboard"></i> Statistics</a></li>
			</ol>
		</div>
	</div>
@stop

@section('content')

	<div class="row">
		<div class="col-lg-10 col-md-offset-1">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>{{ $languagePrimary->regional_name }}</th>
							<th>{{ $languageSecondary->regional_name }}</th>
                            <th>Key</th>
						</tr>
					</thead>							

					@foreach($messages as $message)
						<tr>
							<td class="{{ is_null($message->primary_message) ? 'danger' : 'success' }}">{{ $message->primary_message ?: '(missing)' }}</td>
							<td class="{{ is_null($message->secondary_message) ? 'danger' : 'success' }}">{{ $message->secondary_message ?: '(missing)' }}</td>
                            <td>{{ $message->key }}</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>	

@stop