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
<div class="details">
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
                <th>更改</th>
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
                <td><button id="btn1">删除</button>|<button id="btn2">更新</button></td>
            </tr> 
         @endforeach
    </table>
</div>
</body>
</html>


