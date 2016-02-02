@extends('admin.layout')

@section('pageHeader')
<div class="row">
	<div class="col-lg-12">
		<h1>Pages</h1>
	</div>
</div>
@stop

@section('content')

<div class="row">
	<div class="col-lg-10 col-md-offset-1">
		<div class="table-responsive">
			<p>
				<a href="{{ URL::route('admin.pages.create') }}">
					<button type="button" class="btn btn-danger btn-xs">
						new page
					</button>
				</a>
			</p>

			<table class="table table-bordered table-striped">
				@foreach($pages as $page)
				<tr>
					<td>{{ $page->name_en }}
						<div  class="pull-right">
							<a href="{{ URL::route('admin.pages.edit', $page->id) }}">
								<button type="button" class="btn btn-primary btn-xs">
									edit
								</button>
							</a>

						</div>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>

@stop