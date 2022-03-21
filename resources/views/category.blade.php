@extends('template')

@section('container')
    <h1>{{ $category->name }}</h1>
    <hr/>
    @foreach ($category->articles as $article)
        <article class="mb-5">
            <h3>
                <a href="/article/{{ $article->slug }}">
                    {{ $article->title }}
                </a>
            </h3>
            <h6>By : {{ $article->user->name }}</h6>
            <p>{{ $article->excerpt }}</p>
        </article>
    @endforeach
@endsection
