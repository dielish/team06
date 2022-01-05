@extends('app')

@section('title','顯示所有殺手資料')


@section('nba_contents')


    </a>
    <a href="{{route('killers.difficulty')}}">難度簡單</a>
    <a href="{{route('killers.soso')}}">難度普通</a>
    <a href="{{route('killers.er')}}">難度困難</a>


    <table border="1">
        <tr>
            <th>編號</th>
            <th>殺手</th>
            <th>所屬DLC</th>
            <th>使用難度</th>
            <th>能力1</th>
            <th>能力2</th>
            <th>傳承技能1</th>
            <th>傳承技能2</th>
            <th>傳承技能3</th>
            <th>別名</th>
            <th>操作1</th>
            <th>操作2</th>
            <th>操作3</th>
            <th>
                <a href="killers/create">
                    新增資料
                </a>
            </th>
        </tr>
        @foreach($killers as $killer)
            <tr>
                <td>{{$killer->id}}</td>
                <td>{{$killer->killer}}</td>
                <td>{{$killer->Did}}</td>
                <td>{{$killer->difficulty}}</td>
                <td>{{$killer->strenght1}}</td>
                <td>{{$killer->strenght2}}</td>
                <td>{{$killer->inherited1}}</td>
                <td>{{$killer->inherited2}}</td>
                <td>{{$killer->inherited3}}</td>
                <td>{{$killer->anothername}}</td>
                <td>
                    <a href="killers/{{$killer->id}}">
                        詳細資料
                    </a>
                </td>
                <td>
                    <a href="killers/{{$killer->id}}/edit">
                        修改資料
                    </a>
                </td>
                <td>
                    <form method="post" action="killers/{{$killer->id}}">
                        @csrf
                        @method("delete")
                        <input type = "submit" value="刪除"/>

                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
