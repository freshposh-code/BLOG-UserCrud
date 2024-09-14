<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogApp</title>
</head>

<body>

    @auth
    <h1 style="text-align: center">Congrats, you are Signed In</h1>
    <form style="display: flex; justify-content: center; align-items: center;" action="/logout" method="POST">
    @csrf
    <button style="margin-top: 15px; padding: 10px; background: transparent; font-weight: bold; font-size: medium; cursor: pointer; text-align: center;">Logout</button>
</form>

<div style="display: flex; flex-direction: column; text-align: center;">
    <h2>Create a New Post</h2>
    <form action="/create-post" method="POST">
        @csrf
    <input style="padding: 6px 20px; outline: none; border: 1px solid black; margin: 7px;" type="text" name="title" placeholder="post title"> <br>
    <textarea style="width: 300px; height: 100px; text-align: center;" name="body" placeholder="body content...."></textarea> <br>
    <button style="margin-top: 15px; padding: 10px; background: transparent; font-weight: bold; font-size: medium; cursor: pointer;">Save Post</button> 
    </form>
</div>

<div style="">
    <h2 style="margin: 10px;">All Posts</h2>
    @foreach($posts as $post)
    <div style="background-color: rgb(33, 87, 89); color: aliceblue; width: 50%; margin: 10px; padding: 1rem;">
        <h3>{{$post['title']}} by {{$post->user->name}}</h3>
        {{$post['body']}}
        <div style="display: flex; justify-content: space-between; align-items: center;">
        <p><a style=" padding: 5px; text-decoration: none; color: rgb(0, 0, 0); background: white;" href="/edit-post/{{$post->id}}">Edit</a></p>
        <form action="/delete-post/{{$post->id}}" method="POST">
        @csrf
    @method('DELETE')
    <button>Delete</button>
    </form>
</div>
    </div>
    @endforeach
</div>

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
            {{-- <p> Already have an account?<a href="/login">Login</a></p> --}}
        </form>
    </div>

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
