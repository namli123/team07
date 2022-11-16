@extends('app')

@section('title', '建立表單')

@section('game_theme', '建立表單')

@section('game_contents')
    @include('message.list')
    {!! Form::open(['url' => 'catalogs/store']) !!}
    @include('catalogs.form', ['submitButtonText'=>"新增資料"])
    {!! Form::close() !!}
@endsection
