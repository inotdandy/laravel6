@extends('layouts')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{ $article->title }}</h2>
			</div>	
			<p>
				<img src="/images/banner.jpg" alt="" class="image image-full" />
			</p>
			<div>
				{{ $article->body }}
			</div>
			<div style="margin-top: 20px;">
				@forelse ($article->tags as $tag)
					<a href="{{route('articles.index', ['tag' => $tag->name])}}">{{ $tag->name}}</a>
				@empty
					<p>No related articles yet</p>
				@endforelse
			</div>
		</div>
	</div>
</div>
@endsection