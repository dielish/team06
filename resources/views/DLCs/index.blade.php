@extends('app')

@section('title','全部加內容資料')


@section('nba_contents')
</a>
<a href="{{route('DLCs.price')}}">價格99</a>
<a href="{{route('DLCs.p')}}">價格138</a>
<a href="{{route('DLCs.rt')}}">價格226</a>
<table border=1>
    <tr>
        <th>編號</th>
        <th>產品</th>
        <th>價格</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
        <th>
            <a href="DLCs/create">
                新增資料
            </a>
        </th>

    </tr>
    @foreach($DLCs as $DLC)
        <tr>
            <td>{{$DLC->id}}</td>
            <td>{{$DLC->product}}</td>
            <td>{{$DLC->price}}</td>
            <td>
                <a href="DLCs/{{$DLC->id}}">
                    詳細資料
                </a>
            </td>
            <td>
                <a href="DLCs/{{$DLC->id}}/edit">
                    修改資料
                </a>
            </td>
            <td>
                <form method="post" action="DLCs/{{$DLC->id}}">
                    @csrf
                    @method("delete")
                    <input type = "submit" value="刪除"/>


                </form>
            </td>
        </tr>
    @endforeach
</table>


    @endsection
