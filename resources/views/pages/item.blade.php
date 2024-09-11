<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href= '{{asset('css/bootsrap.css')}}';>
    <title>Profile Page</title>
</head>
<body bgcolor="red">
    <h1>This is my Item Page :</h1>
    <h2><a href="{{url('/')}}">Home</a> | Item | <a href="{{url('/picture')}}">Picture</a></h2>
    <div>
        <img src="Naruto.jpeg" alt="Naruto">
    </div>
    <div>
        <img src="obito.jpeg" alt="obito">
    </div>
    <div>
        <img src="sasuke.jpeg" alt="sasuke">
    </div>
</body>
</html>
