@extends('app')

@section('content')
    <h1>Create</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::open(['route' => 'posts.store']) !!}
    @include('post._form')
    {!! Form::close()!!}
@endsection