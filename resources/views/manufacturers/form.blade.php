<style>
    .form-control{
        margin: 5px;
    }
</style>
<div class="form-group">
    {!! Form::label('name', '遊戲廠商公司') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('capital', '資本額') !!}
    {!! Form::text('capital', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('found_at', '成立日期') !!}
    {!! Form::text('found_at', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('national', '国籍') !!}
    {!! Form::text('national', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
