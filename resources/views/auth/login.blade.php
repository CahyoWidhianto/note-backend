<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{url('/login/verify')}}">
        @csrf
        <p>
            <label for="">Email</label> <br>
            <input type="email" name="username" placeholder="Username">
        </p>
        <p>
            <label for="">Password</label> <br>
            <input type="password" name="password" placeholder="Password">
        </p>

        <input type="submit" value="login">
    </form>
</body>
</html>