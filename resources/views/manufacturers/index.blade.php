<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
<div>
    <a href="{{url('catalogs/')}}">catalogs</a>
</div>
<div class="details">
    <table>
            <tr>
                <th>id</th>
                <th>遊戲廠商公司</th>
                <th>資本額</th>
                <th>成立日期</th>
                <th>國家</th>
                <th>更改</th> 
            </tr>
        @foreach($manufacturers as $manufacturers)
            <tr>
                <td>{{$manufacturers->id }}</td>
                <td>{{$manufacturers->name }}</td>
                <td>{{$manufacturers->capital }}</td>
                <td>{{$manufacturers->found_at }}</td>
                <td>{{$manufacturers->national }}</td>  
                <td>
                    <form action="{{ url('manufacturers/delete', ['id' => $manufacturers->id]) }}" method="post">
                        <input id="btn1" class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form> 
                    <a href="{{url('manufacturers/edit', ['id' => $manufacturers->id])}}">Edit</a>
                </td>
            </tr> 
         @endforeach
    </table>
</div>
</body>
</html>


