
@extends('app')

@section('title', 'manufacturers')

@section('game_theme')

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
        <a href="{{url('manufacturers/create')}}">新增游戲公司</a><br>
        <a href="{{ url('manufacturers/') }} ">所有游戲公司</a>
    </div>
    <table>
            <tr>
                <th>id</th>
                <th>遊戲廠商公司</th>
                <th>資本額</th>
                <th>成立日期</th>
                <th>國家</th>
                <th>操作 1</th>
                <th>操作 2</th>
                <th>操作 3</th>
            </tr>
        @foreach($manufacturers as $manufacturers)
            <tr>
                <td>{{$manufacturers->id }}</td>
                <td>{{$manufacturers->name }}</td>
                <td>{{$manufacturers->capital }}</td>
                <td>{{$manufacturers->found_at }}</td>
                <td>{{$manufacturers->national }}</td>  
                <td><a href="{{ url('manufacturers/show', ['id'=>$manufacturers->id]) }}">顯示</a></td>
                <td>
                    <form action="{{ url('manufacturers/delete', ['id' => $manufacturers->id]) }}" method="post">
                        <input id="btn1" class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form> 
                    
                </td>
                <td><a href="{{url('manufacturers/edit', ['id' => $manufacturers->id])}}">Edit</a></td>
            </tr> 
         @endforeach
    </table>
@endsection


