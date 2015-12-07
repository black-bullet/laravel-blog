@extends('app')

@section('content')
    @if(Entrust::hasRole('admin'))
        <button type="button" class="btn btn-primary" onclick="window.location='{{ URL::route('posts.edit',$post->id) }}'">
            Update
        </button>
        {!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'delete')) !!}
        <button type="submit" class="btn btn-primary">
            Delete
        </button>
        {!! Form::close() !!}
    @endif
    <article>
        <h2>
            {{ $post->title }}
        </h2>

        <p class="post-p">
            {{ $post->content }}
        </p>

        <p class="post-p">
            author:{{ $post->author }}
        </p>

        <p class="post-p">
            published: {{ $post->created_at  }}
        </p>
        <p class="post-p">
            comments:
        </p>
        <hr>
            @foreach ($comments as $comment)
                @if($comment->published)
                    <h4>{{ $comment->name }}</h4>
                    <p>{{ $comment->comment }}</p>
                @endif
            @endforeach
        <p>
            create comment:
            {!! Form::open(['route' => 'comments.store']) !!}
                {!! Form::hidden('post_id', $post->id) !!}
                @include('comment.create')
            {!! Form::close()!!}
        </p>
    </article>
@stop