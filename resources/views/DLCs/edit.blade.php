@extends('app')

@section('title','修逮一筆追加內容資料')


@section('nba_contents')
    修改單一追加內容資料
    <form method="post" action="/DLCs/{{$DLC->id}}">
        @method("put")
        @csrf
        <table border="1">
            <tr>
                <td>編號</td>
                <td>{{$DLC->id}}</td>
            </tr>
            <tr>
                <td>產品</td>
                <td><input type="text" name="product" value="{{$DLC->product}}"/></td>
            </tr>
            <tr>
                <td>價格</td>
                <td><input type="text" name="price" value="{{$DLC->price}}"/></td>
            </tr>




        </table>
        <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
    </form>
@endsection
