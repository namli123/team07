@extends('app')

@section('title', 'game')

@section('game_theme', 'game')

@section('game_contents')
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

    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href=" {{ url('catalogs/create/') }} ">新增球員</a><br>
        <a href="{{ url('/') }} ">所有游戲</a>
    </div>
    <table> 
            <tr>
                <th>id</th>
                <th>名稱</th>
                <th>廠商編號</th>
                <th>價格</th>
                <th>評價</th>
                <th>發行日期</th>
                <th>硬手</th>
                <th>遊戲類型</th>
                <th>操作 1</th>
                <th>操作 2</th>
                <th>操作 3</th>
            </tr>
        @foreach($catalogs as $catalog)
            <tr>
                <td>{{$catalog->id }}</td>
                <td>{{$catalog->name }}</td>
                <td>{{$catalog->mid }}</td>
                <td>{{$catalog->price }}</td>
                <td>{{$catalog->evaluaation }}</td>
                <td>{{$catalog->issue_date }}</td>
                <td>{{$catalog->revenue }}</td>
                <td>{{$catalog->game_type }}</td>
                <td><a href="{{ url('catalogs/show', ['id'=>$catalog->id]) }}">顯示</a></td>
                <td>
                    <form action="{{ url('catalogs/delete', ['id' => $catalog->id]) }}" method="post">
                        <input id="btn1" class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form> 
                </td>  
                <td><a href="{{url('catalogs/edit', ['id' => $catalog->id])}}">edit</a></td>
            </tr> 
         @endforeach
    </table>

@endsection
