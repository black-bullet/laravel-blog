@extends('app')

@section('content')
    <button type="button" class="btn btn-primary" onclick="window.location='{{ URL::route('posts.edit',$post->id) }}'">
        Update
    </button>
    {!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'delete')) !!}
    <button type="submit" class="btn btn-primary">
        Delete
    </button>
    {!! Form::close() !!}
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
    </article>
@stop