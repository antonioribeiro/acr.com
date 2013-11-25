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
							<th>{{ $localePrimary->regional_name }}</th>
                            <th>{{ $localeSecondary->regional_name }}</th>
                            <th>Key</th>
						</tr>
					</thead>							

					@foreach($messages as $message)
                        <?php 

                            $editLink = URL::route('admin.translation.edit', [
                                                                                $message->message_id, 
                                                                                $localePrimary->language_id.'-'.$localePrimary->country_id, 
                                                                                $localeSecondary->language_id.'-'.$localeSecondary->country_id
                                                                            ]);
                        ?>

						<tr>
							<td class="{{ is_null($message->primary_message) ? 'danger' : 'success' }}">
                                <a href="{{ $editLink }}">
                                    {{ $message->primary_message ?: '(missing)' }}
                                </a>
                            </td>

							<td class="{{ is_null($message->secondary_message) ? 'danger' : 'success' }}">
                                <a href="{{ $editLink }}">
                                    {{ $message->secondary_message ?: '(missing)' }}
                                </a>
                            </td>

                            <td>{{ $message->key }}</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>	

@stop