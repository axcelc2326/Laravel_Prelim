<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href= '{{asset('css/bootsrap.css')}}';>
    <title>Home Page</title>
</head>
<body bgcolor="lightgreen">
    <h1>This is my Home Page :</h1>
    <h2>Home | <a href="{{url('/item')}}">Item</a> | <a href="{{url('/picture')}}">Picture</a></h2>
</body>
</html>
