@extends('app')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!!  Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) !!}

    @include('post._form')

    {!! Form::close() !!}

@stop