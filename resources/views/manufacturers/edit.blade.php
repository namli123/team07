@extends('app')

@section('title', '更改資料')

@section('game_theme', '更改資料')

@section('game_contents')
@include('message.list')
{!! Form::model($manufacturers, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\ManufacturersControllers@update', $manufacturers->id]]) !!}
@include('manufacturers.form', ['submitButtonText'=>'更新資料'])
{!! Form::close() !!}
@endsection