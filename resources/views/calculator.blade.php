<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator Personal</title>
    <style type="text/css">
        table {
            background: #03c6e1;
            border-radius: 10px;
        }

        form, tr, td {
            border-radius: 10px;
        }

    </style>
</head>
<body>
<h1>(: (: Calculator :) :) </h1>
<form>

    <table border="3">

        <tr>
            <td><input style="width: 262px" type="text" id="nhapvao"
                       placeholder="           Robin Diem Hello Everybody :) ^^"></td>
        </tr>
        </br>
        <tr>
            <td>
                <input type="button" style="width: 50px" value="1" id="mot" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="2" id="hai" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="3" id="ba" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="+" id="cong" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="<=" id="xoa"
                       onclick="nhapvao.value=nhapvao.value.substr(0,nhapvao.value.length-1);">
            </td>
        </tr>
        </br>
        <tr>
            <td>
                <input type="button" style="width: 50px" value="4" id="bon" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="5" id="nam" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="6" id="sau" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="-" id="tru" onclick="nhapvao.value+=this.value;">
                <input type="reset" style="width: 50px" value="C" id="C" onclick="this.value;">
            </td>
        </tr>
        </br>
        <tr>
            <td>
                <input type="button" style="width: 50px" value="7" id="bay" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="8" id="tam" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="9" id="chin" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="*" id="nhan" onclick="nhapvao.value+=this.value;">
                <button type="button" style="width: 50px" value="*0.01" id="phantram"
                        onclick="nhapvao.value+=this.value;">%
                </button>
            </td>
        </tr>
        </br>
        <tr>
            <td>
                <input type="button" style="width: 104px" value="0" id="khong" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="." id="cham" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="/" id="chia" onclick="nhapvao.value+=this.value;">
                <input type="button" style="width: 50px" value="=" id="bang"
                       onclick="nhapvao.value=eval(nhapvao.value);">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
