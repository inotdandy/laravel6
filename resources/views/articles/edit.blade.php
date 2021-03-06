@extends('layouts')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" />
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Edit Article</h1>
            <form action="{{route('articles.update', $article)}}" method="post">
                @csrf
                @method('PUT')
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input type="text" class="input @error('title') is-danger @enderror" id="input" name="title" 
                                value="{{ $article->title }}">
    
                        @error('title')
                            <p class="is-danger">{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <textarea name="excerpt" 
                    id="excerpt" 
                    class="textarea @error('excerpt') is-danger @enderror">{{ $article->excerpt }}</textarea>
    
                    @error('excerpt')
                        <p class="is-danger">{{ $errors->first('excerpt')}}</p>
                    @enderror
                </div>
    
                <div class="field">
                    <label for="body" class="label">Body</label>
                    <textarea 
                    name="body" 
                    id="body" 
                    class="textarea @error('body') is-danger @enderror">{{ $article->body }}</textarea>
                    
                    @error('body')
                        <p class="is-danger">{{ $errors->first('body')}}</p>
                    @enderror
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection