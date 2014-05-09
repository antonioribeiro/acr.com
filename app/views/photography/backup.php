			<section id="content">
				<div id="portfolio-album" class="masonry-container calc-hover">
					<div class="categories-block">
						<div class="padding-wrap">
							<a href="javascript:void(0);" class="switch-categories-block">Show navigation bar &darr;</a>
							<ul>
								<li data-id="all" class="selected">All</li>

								@foreach($types as $type)
									<li data-id="{{$type}}">{{ucwords($type)}}</li>
								@endforeach
							</ul>		
						</div>
					</div>

					<section class="masonry nolookbook" id="visible_items">
						@foreach($photos as $key => $photo)
							<article class="{{$photo['size'] == 'N' ? 'narrow-1col' : 'wide-2col'}} category-all category-{{$photo['type']}}" id="image-5084">
								<a class="toggle fancybox" rel="album" title="Sara Watkins" href="{{$photo['photography']}}">
									<img src="{{$photo['thumbnail']}}"/>
								</a>
							</article>
						@endforeach
					</section>

					<div class="hidden" id="hidden_items">

					</div>
				</div>
			</section><!-- #content -->
