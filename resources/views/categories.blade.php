@extends('template')

@section('container')
    <h1>Halaman Kategori</h1>
    <hr/>
    @foreach ($categories as $category)
        <article class="mb-5">
            <h3>
                <a href="/categories/{{ $category->slug }}">
                    {{ $category->name }}
                </a>
            </h3>
        </article>
    @endforeach
@endsection
