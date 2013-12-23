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
	            	{{'key:bio'}}
	            </p>
	        </div>
	    </div>
	</section>
@stop

	                

