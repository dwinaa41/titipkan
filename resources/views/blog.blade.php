{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')

@foreach ($post as $blog)
<article class="mb-5">
    <h2>
        <a href="/post/{{ $blog ["slug"]}}">{{ $blog["title"] }}</a>
    </h2>
    <h5>By: {{ $blog["author"] }}</h5>
    <p>{{ $blog["body"] }}</p>
</article>
@endforeach

@endsection


