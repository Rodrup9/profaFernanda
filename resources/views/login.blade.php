<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Login</title>
</head>
<body>
    <main class="mainLogin">
        <form class="form" action="logearse" method="post">
            @csrf
            <h2>Login</h2>
            <div class="boxInput">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
            </div>
            <div class="boxInput">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="buttons">
                <button class="btnConfirm" type="submit">Entrar</button>
            </div>
            <a href="singUp" class="btnSRgistrarse">Registarse</a>
        </form>
    </main>
</body>
</html>