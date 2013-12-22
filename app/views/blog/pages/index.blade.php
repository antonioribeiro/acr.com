@extends('blog.layout')

@section('content')
	<div class="archive">
	    <h1>
	        {{'Recent posts'}}
	    </h1>

	    @include('blog._partials.articles', ['articles' => $articles])
	</div>

	<hr/>
	<section itemscope itemtype="http://schema.org/Person">
	    <div class="about">
	        <img class="about__avatar" src="https://en.gravatar.com/userimage/44504373/e19eaa0dc1fb64883167c6b99ad9dfd4.jpg?size=120" alt="A photo of Antonio Carlos Ribeiro" width="120" height="120" itemprop="image"/>
	        <div class="about__body">
	            <h1 class="about__title h3">
	                <span itemprop="name">
	                    Antonio Carlos Ribeiro
	                </span>
	            </h1>
	            <p itemprop="description">
	                I'm a 43 year old developer and photographer based in 
	                Rio de Janeiro. For the past 25 years I developed applications for DOS 
	                and Windows, and administered Linux systems, in the meantime I also 
	                did some landscape, portrait and concert photography, while being a tireless 
	                traveler and language enthusiast, loving both natural and programming 
	                languages. Presently I'm doing web development using PHP and 
	                <a href="http://laravel.com">The Laravel Framework</a>.
	            </p>
	        </div>
	    </div>
	</section>
@stop