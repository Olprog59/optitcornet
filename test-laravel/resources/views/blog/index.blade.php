@extends('base')


@section('title', "Ô P'TIT CORNET")

@section('content')
    <h1>Blog</h1>

    @foreach ($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <p>
                @if ($post->category)
                    Catégorie : <strong>{{ $post->category?->name }}</strong>
                    @if (!$post->tags->isEmpty())
                        ,
                    @endif
                @endif
                @if (!$post->tags->isEmpty())
                    Tags :
                    @foreach ($post->tags as $tag)
                        <span>{{ $tag->name }}</span>
                    @endforeach
                @endif
            </p>
            <p>
                {{ $post->content }}
            </p>
        </article>
    @endforeach

    {{ 'coucou' }}
@endsection
