{{-- @dd($post) --}}
@extends('layout.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    @foreach ($post as $item)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/blog/{{ $item->slug }}" class="text-decoration-none">{{ $item->judul }}</a>
            </h2>
            <p>By <a href="/authors/{{ $item->author->username }}" class="text-decoration-none">{{ $item->author->name }}</a> in <a href="/categories/{{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }}</a></p>
            {{-- <h5>By : {{ $item['author'] }}</h5> --}}
            <p>{{ $item->excerpt }}</p>
            <a href="/blog/{{ $item->slug }}" class="text-decoration-none">Read More</a>
        </article>
    @endforeach
@endsection
