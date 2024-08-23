<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogApp</title>
</head>

<body>

    @auth
    <h1 style="text-align: center">Congrats, you are logged in</h1>
    @else
    <h1 style="text-align: center;">Register Page</h1>
    <div style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
        <form action="/register" method="POST" style="display: flex; flex-direction: column; width: 550px; border: 1px solid black; padding: 25px;">
            @csrf
            <h3>Name:</h3>
            <input name="name" value="{{ old('name') }}" style="padding: 6px 10px; outline: none; border: 1px solid black" type="text" placeholder="name">
            <!-- Display error message for name field -->
            @if ($errors->has('name'))
                <span style="color: red;">{{ $errors->first('name') }}</span>
            @endif

            <h3>Email:</h3>
            <input name="email" value="{{ old('email') }}" style="padding: 6px 10px; outline: none;" type="email" placeholder="email">
            <!-- Display error message for email field -->
            @if ($errors->has('email'))
                <span style="color: red;">{{ $errors->first('email') }}</span>
            @endif

            <h3>Password:</h3>
            <input name="password" style="padding: 6px 10px; outline: none;" type="password" placeholder="password">
            <!-- Display error message for password field -->
            @if ($errors->has('password'))
                <span style="color: red;">{{ $errors->first('password') }}</span>
            @endif

            <button style="margin-top: 15px; padding: 10px; background: transparent; font-weight: bold; font-size: medium; cursor: pointer;">Register</button>
        </form>
    </div>

    @endauth
    
</body>

</html>
