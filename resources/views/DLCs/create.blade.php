@extends('app')

@section('title','新增一筆追加內容資料')


@section('nba_contents')
    <form method="post" action="/DLCs">
        @csrf
        <table border="1">

            <tr>
                <td>產品</td>
                <td><input type="text" name="product" /></td>
            </tr>
            <tr>
                <td>價格</td>
                <td><input type="text" name="price" /></td>
            </tr>




        </table>
        <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
    </form>

@endsection
