@extends('app')

@section('title', '顯示特定GAME')

@section('game_theme', '您所選取的GAME資料')
@section('game_contents')
    編號：{{ $catalogs->id }}<br/>
    名稱:{{ $catalogs->name }}<br/>
    廠商編號:{{ $catalogs->mid }}<br/>
    價格:{{ $catalogs->price }}<br/>
    評價:{{ $catalogs->evaluaation }}<br/>
    發行日期:{{ $catalogs->issue_date }}<br/>
    硬手:{{ $catalogs->revenue }}<br/>
    遊戲類型:{{ $catalogs->game_type }}<br/>
    發行公司:{{ $manufacturers_name }}<br/>
@endsection

