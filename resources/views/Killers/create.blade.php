@extends('app')

@section('title','新增一筆殺手資料')


@section('nba_contents')
    新增殺手
    <form method="post" action="/killers">
        @csrf
        <table border="1">
            <tr>
                <td>殺手</td>
                <td><input type="text" name="killer" required /></td>
            </tr>
            <tr>
                <td>所屬DLC</td>
                <td><input type="text" name="Did" required /></td>
            </tr>
            <tr>
                <td>使用難度</td>
                <td><input type="radio" name="difficulty" value="簡單"  />
                    <label for="html">簡單</label></br>
                    <input type="radio" name="difficulty" value="普通" />
                    <label for="html">普通</label></br>
                    <input type="radio" name="difficulty" value="困難" />
                    <label for="html">困難</label></br>
                </td>
            </tr>
            <tr>
                <td>能力1(右鍵)</td>
                <td><input type="text" name="strenght1" required /></td>
            </tr>
            <tr>
                <td>能力2(CTRL)</td>
                <td><input type="text" name="strenght2"/></td>
            </tr>
            <tr>
                <td>傳承技能1</td>
                <td><input type="text" name="inherited1" required /></td>
            </tr>
            <tr>
                <td>傳承技能2</td>
                <td><input type="text" name="inherited2" required /></td>
            </tr>
            <tr>
                <td>傳承技能3</td>
                <td><input type="text" name="inherited3"required /></td>
            </tr>
            <tr>
                <td>別名</td>
                <td><input type="text" name="anothername"/></td>
            </tr>

        </table>
        <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
    </form>

@endsection
