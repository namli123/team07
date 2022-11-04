<style>
    .form-control{
        margin: 5px;
    }
</style>
<div class="form-group">
    {!! Form::label('name', '名稱') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('mid', '廠商編號') !!}
    {!! Form::text('mid', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('price', '價格') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('evaluaation', '評價') !!}
    {!! Form::text('evaluaation', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('issue_date', '發行日期') !!}
    {!! Form::text('issue_date', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('revenue', '硬手') !!}
    {!! Form::text('revenue', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('game_type', '遊戲類型') !!}
    {!! Form::text('game_type', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
