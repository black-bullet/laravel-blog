<div class="form-group">
    <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title', null, ['class'=>'form-control'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content') !!}
        {!! Form::textarea('content', null, ['class'=>'form-control'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('author') !!}
        {!! Form::text('author', null, ['class'=>'form-control'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published') !!}
        {!! Form::checkbox('published', null, false) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    </div>
</div>