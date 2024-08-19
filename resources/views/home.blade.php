<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="text-align: center;">Register Page</h1>
    <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
        <form action="/register" method="POST" style="display: flex; flex-direction: column; width: 550px; border: 1px solid black; padding: 25px;">
            @csrf
            <h3>Name:</h3>
            <input style="padding: 6px 10 6px 10; outline: none;" type="text" placeholder="name">
            <h3>Email:</h3>
            <input style="padding: 6px 10 6px 10;  outline: none;" type="email" placeholder="email">
            <h3>Password:</h3>
            <input style="padding: 6px 10 6px 10;  outline: none;" type="text" placeholder="password">

            <button style="margin-top: 15px; padding: 10px; background: transparent; font-weight: bold; font-size: medium; cursor: pointer;">Register</button>
        </form>
    </div>
</body>

</html>