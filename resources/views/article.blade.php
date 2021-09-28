{{-- @dd($post) --}}
@extends('layout.main')

@section('container')
    <article class="mb-5">
        <h2>
            {{ $post->judul }}
        </h2>
        <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {{-- tanda {!!  !!} berfungsi menjalankan tag yg ada pada string, harus hati2 dalam menggunakan tag ini agar tidak menjalankan script yang aneh2 --}}
        {!! $post->body !!}
    </article>
    <a href="/blog">Back to previous page</a>
@endsection
