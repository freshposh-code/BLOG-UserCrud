<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @auth
    <h1 style="text-align: center">Congrats, you are logged in</h1>
    <form style="display: flex; justify-content: center; align-items: center;" action="/logout" method="POST">
    @csrf
    <button style="margin-top: 15px; padding: 10px; background: transparent; font-weight: bold; font-size: medium; cursor: pointer; text-align: center;">Logout</button>
</form>
    @else
    <h1 style="text-align: center;">Login Page</h1>
    <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
        <form action="/login" method="POST" style="display: flex; flex-direction: column; width: 550px; border: 1px solid black; padding: 25px;">
            @csrf
            <h3>Name:</h3>
            <input name="loginname" style="padding: 6px 10px; outline: none; border: 1px solid black" type="text" placeholder="name">

            <h3>Password:</h3>
            <input name="loginpassword" style="padding: 6px 10px; outline: none;" type="password" placeholder="password">

            <button style="margin-top: 15px; padding: 10px; background: transparent; font-weight: bold; font-size: medium; cursor: pointer;">Login</button>
        </form>
    </div>
    @endauth

</body>

</html>