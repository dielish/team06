@extends('app')

@section('title','修改一筆殺手資料')


@section('nba_contents')
    <h1>修改單一殺手資料   記得填寫難度</h1>
    <form method="post" action="/killers/{{$killer->id}}">
        @method("put")
        @csrf
        <table border="1">
            <tr>
                <td>編號</td>
                <td>{{$killer->id}}</td>
            </tr>
            <tr>
                <td>殺手</td>
                <td><input type="text" name="killer" value="{{$killer->killer}}"/></td>
            </tr>
            <tr>
                <td>所屬DLC</td>
                <td><input type="text" name="Did" value="{{$killer->Did}}"/></td>
            </tr>
            <tr>
                <td>使用難度</td>
                <td><input type="radio" name="difficulty" value="簡單" />
                    <label for="html">簡單</label></br>
                    <input type="radio" name="difficulty" value="普通" />
                    <label for="html">普通</label></br>
                    <input type="radio" name="difficulty" value="困難" />
                    <label for="html">困難</label></br>
                </td>
            </tr>
            <tr>
                <td>能力1(右鍵)</td>
                <td><input type="text" name="strenght1" value="{{$killer->strenght1}}"/></td>
            </tr>
            <tr>
                <td>能力2(CTRL)</td>
                <td><input type="text" name="strenght2" value="{{$killer->strenght2}}"/></td>
            </tr>
            <tr>
                <td>傳承技能1</td>
                <td><input type="text" name="inherited1" value="{{$killer->inherited1}}"/></td>
            </tr>
            <tr>
                <td>傳承技能2</td>
                <td><input type="text" name="inherited2" value="{{$killer->inherited2}}"/></td>
            </tr>
            <tr>
                <td>傳承技能3</td>
                <td><input type="text" name="inherited3" value="{{$killer->inherited3}}"/></td>
            </tr>
            <tr>
                <td>別名</td>
                <td><input type="text" name="anothername" value="{{$killer->anothername}}"/></td>
            </tr>

        </table>
        <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
    </form>


@endsection
