@extends('admin.layout')

@section('content')

	<div class="row">
		<div class="col-lg-12 col-md-offset-0">
			<table class="table table-striped">
				@foreach($languages as $language)
					<tr>
						<td>{{ $language->regional_name }}</td>
						<td>
							<a href="{{ URL::route('admin.language.'.($language->enabled ? 'disable' : 'enable'), $language->id) }}">
								<button type="button" class="btn btn-{{ $language->enabled ? 'danger' : 'success' }} btn-xs">
									@if($language->enabled)
										disable
									@else
										enable
									@endif
								</button>
							</a>
						</td>
					</tr>
				@endforeach
			</table>
			<ul class="list-group">
			</ul>			
		</div>
	</div>

@stop