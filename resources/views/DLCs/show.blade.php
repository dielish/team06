@extends('app')

@section('title','詳細一筆追加內容資料')


@section('nba_contents')
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{$DLC->id}}</td>
        </tr>
        <tr>
            <td>產品</td>
            <td>{{$DLC->product}}</td>
        </tr>
        <tr>
            <td>價格</td>
            <td>{{$DLC->price}}</td>
        </tr>


    </table>

@endsection
