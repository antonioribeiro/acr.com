@extends('admin.layout')

@section('pageHeader')
	<div class="row">
		<div class="col-lg-12">
		<h1>Articles</h1>
		</div>
	</div>
@stop

@section('content')

	<div class="row">
		<div class="col-lg-10 col-md-offset-1">
			<div class="table-responsive">

				<p>
					<a href="{{ URL::route('admin.articles.create') }}">
						<button type="button" class="btn btn-danger btn-xs">
							new article
						</button>
					</a>
				</p>

				<table class="table table-bordered table-striped">
					@foreach($articles as $article)
						<tr>
							<td>{{ $article->title }}
								<div  class="pull-right">
									<a href="{{ URL::route('admin.articles.edit', $article->id) }}">
										<button type="button" class="btn btn-danger btn-xs">
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