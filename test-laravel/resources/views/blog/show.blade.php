@extends('base')


@section('title', $post->slug)

@section('content')

    <article>
        <h2>{{ $post->title }}</h2>
        <p>
            {{ $post->content }}
        </p>
    </article>

@endsection
