{{-- @dd($post) --}}
@extends('layout.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>
    @foreach ($categories as $item)
        <ul>
            <li>
                <a href="/categories/{{ $item->slug }}" class="text-decoration-none">{{ $item->name }}</a>
            </li>
        </ul>
    @endforeach
@endsection
