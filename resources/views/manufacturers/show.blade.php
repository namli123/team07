@extends('app')

@section('title', '顯示特定廠商公司')

@section('game_theme', '您所選取的廠商公司資料')
@section('game_contents')
    編號:{{ $manufacturers->id }}<br/>
    遊戲廠商公司:{{ $manufacturers->name }}<br/>
    資本額:{{ $manufacturers->capital }}<br/>
    成立日期:{{ $manufacturers->found_at }}<br/>
    国家:{{ $manufacturers->national }}<br/>
    游戲產品：{{ $catalogs }}
@endsection

