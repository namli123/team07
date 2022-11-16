@extends('app')

@section('title', '更改資料')

@section('game_theme', '更改資料')

@section('game_contents')
@include('message.list')
{!! Form::model($catalogs, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\CatalogsControllers@update', $catalogs->id]]) !!}
@include('catalogs.form', ['submitButtonText'=>'更新資料'])
{!! Form::close() !!}
@endsection