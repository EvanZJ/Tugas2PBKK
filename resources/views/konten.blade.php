@extends('template')

@section('container')
    <article class="mb-5">
        <header>
            <h3> {{ $article->title }} </h3>
            <h6>{{ !empty($article->user)? $article->user->name:'ab' }} | <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></h6>
        </header>
        <p>{{ $article->body }}</p>
    </article>
@endsection