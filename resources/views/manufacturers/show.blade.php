@extends('app')

@section('title', '顯示特定廠商公司')
<style>
        .details {
            text-align: center;
            margin-left: 400px;
        }
        table, th, td{
                border: 1px solid;
        }
        #btn1:hover{
            color: black;
            background-color: red;
        }
        #btn2:hover{
            background-color:green;
        }
</style>
@section('game_theme', '您所選取的廠商公司資料')
@section('game_contents')
    編號:{{ $manufacturers->id }}<br/>
    遊戲廠商公司:{{ $manufacturers->name }}<br/>
    資本額:{{ $manufacturers->capital }}<br/>
    成立日期:{{ $manufacturers->found_at }}<br/>
    国家:{{ $manufacturers->national }}<br/>
    <hr>
    產品：
<table>
        <tr>
                <th>名稱</th>
                <th>廠商名稱</th>
                <th>價格</th>
                <th>評價</th>
                <th>發行日期</th>
                <th>硬手</th>
                <th>遊戲類型</th>
        </tr>
        @foreach($catalogs as $catalog)
            <tr>
                <td><a href="{{ url('catalogs/show', ['id'=>$catalog->id]) }}">{{ $catalog->name }}</a></td>
                <td>{{ $catalog->mid }}</td>
                <td>{{ $catalog->price }}</td>
                <td>{{ $catalog->evaluaation }}</td>
                <td>{{ $catalog->issue_date }}</td>
                <td>{{ $catalog->revenue }}</td>
                <td>{{ $catalog->game_type }}</td>
            </tr>
        @endforeach
</table>
@endsection

