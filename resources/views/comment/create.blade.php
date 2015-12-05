<div class="form-group">
    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name', null, ['class'=>'form-control'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::label('comment') !!}
        {!! Form::textarea('comment', null, ['class'=>'form-control'] ) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    </div>
</div>
