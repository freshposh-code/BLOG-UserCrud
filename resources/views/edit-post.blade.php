<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">Edit post</h1> 
    <div style="display: flex; justify-content: center; align-items: center; text-align: center;">
    <form action="/edit-post/{{$post->id}}" method="POST">
    @csrf
@method('PUT')
<input style="text-align: center;" type="text" name="title" value="{{$post->title}}"> <br>
<textarea style="width: 300px; height: 100px; text-align: center;" name="body" placeholder="body content....">{{$post->body}}</textarea> <br>
<button style="">Save Changes</button>
</div>
</form>
</body>
</html>