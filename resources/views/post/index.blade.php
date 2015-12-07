@extends('app')

@section('content')
    @if(Entrust::hasRole('admin'))
        <div class="form-group">
            <button type="button" class="btn btn-primary"  onclick="window.location='{{ URL::route('posts.create') }}'">Create</button>
        </div>
    @endif
    @foreach($posts as $post)
        @if($post->published)
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
                <button type="button" class="btn btn-primary"  onclick="window.location='{{ URL::route('posts.show',$post->id) }}'">Detail</button>
            </div>
        </article>
        @endif
    @endforeach
@stop