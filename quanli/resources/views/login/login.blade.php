<?php

?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1>Dang nhap</h1>
<form action="/login" method="post">
    @csrf
    <table>
        <tr>
            <td>Username</td>
            <td><input name="username" type="text" placeholder="Ten dang nhap"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input name="password" type="password" placeholder="Mat khau"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Dang nhap</button></td>
        </tr>
    </table>
</form>
</body>
</html>
