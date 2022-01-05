@extends('app')

@section('title','詳細顯示一筆殺手資料')


@section('nba_contents')
    顯示單一殺手資料
    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{$killer->id}}</td>
        </tr>
        <tr>
            <td>殺手</td>
            <td>{{$killer->killer}}</td>
        </tr>
        <tr>
            <td>所屬DLC</td>
            <td>{{$killer->Did}}</td>
        </tr>
        <tr>
            <td>使用難度</td>
            <td>{{$killer->difficulty}}</td>
        </tr>
        <tr>
            <td>能力1(右鍵)</td>
            <td>{{$killer->strenght1}}</td>
        </tr>
        <tr>
            <td>能力2(CTRL)</td>
            <td>{{$killer->strenght2}}</td>
        </tr>
        <tr>
            <td>傳承技能1</td>
            <td>{{$killer->inherited1}}</td>
        </tr>
        <tr>
            <td>傳承技能2</td>
            <td>{{$killer->inherited2}}</td>
        </tr>
        <tr>
            <td>傳承技能3</td>
            <td>{{$killer->inherited3}}</td>
        </tr>
        <tr>
            <td>別名</td>
            <td>{{$killer->anothername}}</td>
        </tr>

    </table>

@endsection
