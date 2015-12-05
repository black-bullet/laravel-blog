@extends('app')

@section('content')
    <div class="form-group">
        <button type="button" class="btn btn-primary"  onclick="window.location='{{ URL::route('posts.create') }}'">Create</button>
    </div>
    @foreach($posts as $post)
        <article>
            <h2>
                {{ $post->title }}
            </h2>
            <p>
                {{ $post->content }}
            </p>
            <p>
                author:{{ $post->author }}
            </p>
            <p>
                published: {{ $post->created_at  }}
            </p>
            <div class="form-group">
                <button type="button" class="btn btn-primary"  onclick="window.location='{{ URL::route('posts.show',$post->id) }}'">Edit</button>
            </div>
        </article>
    @endforeach
@stop