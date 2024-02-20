<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Registro</title>
</head>
<body>
    <main class="mainLogin">
        <form class="form" action="join" method="Post">
            @csrf
            <h2>SingUp</h2>
            <div class="boxInput">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
            </div>
            <div class="boxInput">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
            </div>
            <div class="boxInput">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password" >
            </div>
            <div class="boxInput">
                <label for="">Password Confirm</label>
                <input type="password" name="passwordConfirm" placeholder="Password Confrim">
            </div>
            <div class="buttons">
                <button class="btnConfirm" type="submit">Registrarse</button>
            </div>
            <a href="login" class="btnSRgistrarse">Iniciar sesión</a>
        </form>
    </main>
</body>
</html>